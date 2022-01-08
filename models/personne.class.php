<?php
if(session_status() !== PHP_SESSION_ACTIVE) session_start();

class personne
{
	private $id;
	private $nom_prenom_pers;
	private $date_naiss_pers;
	private $interet_pers;
	private $email_pers;
	private $mdp_pers;
	private $tel_pers;
	private $preferences_rencontre;
	private $ville;
	private $domaine;
	private $bio;
	private $nivEtudProf;
	private $image;
	private $id_role;
	

	public function __get($att){
		return $this->$att;
	}
	public function __set($att,$vall){
		$this->$att=$vall;
	}

	public function __construct($id,$nom_prenom_pers,$date_naiss_pers,$interet_pers,$email_pers,$mdp_pers,$tel_pers,$preferences_rencontre,$ville,$domaine,$bio,$nivEtudProf,$image,$id_role)
	{
		$this->id = $id;
		$this->nom_prenom_pers = $nom_prenom_pers;
		$this->date_naiss_pers = $date_naiss_pers;
		$this->interet_pers = $interet_pers;
		$this->email_pers = $email_pers;
		$this->mdp_pers = $mdp_pers;
		$this->tel_pers = $tel_pers;
		$this->preferences_rencontre = $preferences_rencontre;
		$this->ville = $ville;
		$this->domaine = $domaine;
		$this->bio = $bio;
		$this->nivEtudProf = $nivEtudProf;
		$this->image = $image;
		$this->id_role = $id_role;
	}
	

	public function add()
	{
		include_once("../includes/connexion.php");
		$n=new connexion();
		$pdo=$n->CNXbase();
		$res = $pdo->prepare("insert into personne (nom_prenom_pers,date_naiss_pers,interet_pers,email_pers,mdp_pers,tel_pers,preferences_rencontre,ville,domaine,bio,nivEtudProf,image,id_role) values(?,?,?,?,?,?,?,?,?,?,?,?,?)");
		$res->execute([$this->nom_prenom_pers,$this->date_naiss_pers,$this->interet_pers,$this->email_pers,$this->mdp_pers,$this->tel_pers,$this->preferences_rencontre,$this->ville,$this->domaine,$this->bio,$this->nivEtudProf,$this->image,$this->id_role]);
		echo "<script>window.location.href='../index.php';</script>";
		
	}

	public function edit()
	{
		include_once("../includes/connexion.php");
		$n=new connexion();
		$pdo=$n->CNXbase();
		$res = $pdo->prepare("update personne set nom_pers=?, prenom_pers=?,adr_pers=?,date_naiss_pers=?,sex_pers=?,interet_pers=?,langue_pers=? where id=?");
		$res->bindParam(1, $this->nom_pers);
		$res->bindParam(2, $this->prenom_pers);
		$res->bindParam(3, $this->adr_pers);
		$res->bindParam(4, $this->date_naiss_pers);
		$res->bindParam(5, $this->sex_pers);
		$res->bindParam(6, $this->interet_pers);
		$res->bindParam(7, $this->langue_pers);
		$res->bindParam(8, $this->id);
		
		$res->execute();
		echo "<script>window.location.href='../app/profile.php';</script>";
		
	}

	public function supp($cnx)
	{
		include_once("../includes/connexion.php");
		$cnx->exec("delete from personne where id='" . $this->id . "'");
		echo "<script>window.location.href='index.php?controller=personne&action=liste';</script>";
		
	}

	public function liste($cnx)
	{
		include_once("../includes/connexion.php");
		$personnes = $cnx->query("select * from personne")->fetchAll(PDO::FETCH_OBJ);
		return $personnes;
	}

	public function getProRecommandations()
	{include_once("includes/connexion.php");
		$personnes1[]= $this;
		$personnes2[]= $this;
		$result[]= $this;
		$prefLieuxThisPers=explode(",", $_SESSION['personne']->preferences_rencontre);
		$domaineThisPers=explode(",", $_SESSION['personne']->domaine);
		$n=new connexion();
		$pdo=$n->CNXbase();
		$allPersonnes = $pdo->query("select * from personne where id_role='Professionel'")->fetchAll(PDO::FETCH_OBJ);
		foreach($allPersonnes as $pers)
		{
			$prefLieuxPers=explode(",", $pers->preferences_rencontre);
			$domainePers=explode(",", $pers->domaine);
			foreach($prefLieuxPers as $rowstr)
			{
				if (in_array($rowstr, $prefLieuxThisPers)) {
					array_push($personnes1, $pers);
					break;
				}
				
			}

			foreach($domainePers as $rowstr)
			{
				if (in_array($rowstr, $domaineThisPers)) {
					array_push($personnes2, $pers);
					break;
				}
				
			}

			$result = array_intersect_key($personnes1, $personnes2);

		}
		return $result;
	}

	public function detail($id)
	{
		include_once("includes/connexion.php");
		$n=new connexion();
		$pdo=$n->CNXbase();
		$personne = $pdo->query("select * from personne where id='" . $id . "'")->fetch(PDO::FETCH_OBJ);
		return $personne;
	}

	public function login()
	{
		include_once("../includes/connexion.php");
		$n=new connexion();
		$pdo=$n->CNXbase();
		
		$personne = $pdo->query("select * from personne where email_pers='" . $this->email_pers . "' and mdp_pers='" . $this->mdp_pers . "'")->fetch(PDO::FETCH_OBJ);
		if (is_object($personne)) {
			$_SESSION['personne'] = $personne;
			if($personne->id_role == "Etudiant"){
				echo "<script>window.location.href='../index.php';</script>";
			}
			else if($personne->id_role == "Professionel"){
				echo "<script>window.location.href='../dashboard.php';</script>";
			}
			
		} else {
			echo "<script>window.location.href='../se-connecter.php';</script>";
		}
	}

	public function logout()
	{
		session_destroy();
		echo "<script>window.location.href='../index.php';</script>";
	}
}
