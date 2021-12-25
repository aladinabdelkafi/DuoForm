<?php
if(session_status() !== PHP_SESSION_ACTIVE) session_start();

class meeting
{
	private $id;
	private $sujet;
	private $date;
	private $lieu;
	private $etudiant;
	private $accompagnateur;
	
	

	public function __get($att){
		return $this->$att;
	}
	public function __set($att,$vall){
		$this->$att=$vall;
	}

	public function __construct($id,$sujet,$date,$lieu,$etudiant,$accompagnateur)
	{
		$this->id = $id;
		$this->sujet = $sujet;
		$this->date = $date;
		$this->lieu = $lieu;
		$this->etudiant = $etudiant;
		$this->accompagnateur = $accompagnateur;
		
	}
	

	public function add()
	{
		include_once("../includes/connexion.php");
		$n=new connexion();
		$pdo=$n->CNXbase();
		$res = $pdo->prepare("insert into meeting (sujet,date,lieu,etudiant,accompagnateur) values(?,?,?,?,?)");
		$res->execute([$this->sujet,$this->date,$this->lieu,$this->etudiant,$this->accompagnateur]);
		echo "<script>window.location.href='../dashboard.php';</script>";
		
	}

	public function listeNexMeeingPro($id)
	{
		
		include_once("includes/connexion.php");
		$n=new connexion();
		$pdo=$n->CNXbase();
		$meeting = $pdo->query("select * from meeting where LEFT(date , 10)>=CURDATE() and (accompagnateur='" . $id . "')")->fetchAll(PDO::FETCH_OBJ);
		return $meeting;
	}

	public function listeNexMeeingEtudiant($id)
	{
		
		include_once("includes/connexion.php");
		$n=new connexion();
		$pdo=$n->CNXbase();
		$meeting = $pdo->query("select * from meeting where LEFT(date , 10)>=CURDATE() and (etudiant='" . $id . "')")->fetchAll(PDO::FETCH_OBJ);
		return $meeting;
	}

	
}
