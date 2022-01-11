<?php //session_start();

include "../includes/fonction.class.php";
include "../models/personne.class.php";

//initialisation des parametres
$fn = new fonction();

$id = "";
$nom_prenom_pers = "";
$date_naiss_pers = "";
$interet_pers = "";
$email_pers = "";
$mdp_pers = "";
$tel_pers = "";
$preferences_rencontre = "";
$ville = "";
$bio = "";
$domaine = "";
$image = "avatars-8@2x.png";
$id_role = "";
$action="";
$nivEtudProf="";
//recupétation des variables externes
if (isset($_REQUEST['id']))
	$id = $_REQUEST['id'];

if (isset($_POST['nom_prenom_pers']))
	$nom_prenom_pers = $_POST['nom_prenom_pers'];


if (isset($_POST['date_naiss_pers']))
	$date_naiss_pers = $_POST['date_naiss_pers'];

if (isset($_POST['interet_pers']))
	$interet_pers = $_POST['interet_pers'];

if (isset($_POST['email_pers']))
	$email_pers = $_POST['email_pers'];

if (isset($_POST['mdp_pers']))
	$mdp_pers = $_POST['mdp_pers'];

if (isset($_POST['tel_pers']))
	$tel_pers = $_POST['tel_pers'];

if(isset($_POST['preferences_rencontre']))
	$preferences_rencontre=$_POST['preferences_rencontre'];

if (isset($_POST['ville']))
	$ville = $_POST['ville'];

if (isset($_POST['bio']))
	$bio = $_POST['bio'];

if (isset($_POST['id_role']))
	$id_role = $_POST['id_role'];

if (isset($_POST['domaine']))
	$domaine = $_POST['domaine'];

if (isset($_POST['nivEtudProf']))
	$nivEtudProf = $_POST['nivEtudProf'];


if(isset($_REQUEST['action']))
	$action=$_REQUEST['action'];
	
//creation de l'objet $id, $nom_pers, $prenom_pers,$adr_pers,$date_naiss_pers,$sex_pers,$interet_pers,$langue_pers, $email_pers, $mdp_pers, $tel_pers, $id_role
$pers = new personne($id,$nom_prenom_pers,$date_naiss_pers,$interet_pers,$email_pers,$mdp_pers,$tel_pers,$preferences_rencontre,$ville,$domaine,$bio,$nivEtudProf,$image,$id_role);

switch ($action) {
	case "login1":
		include "vue/abonnee/abn_auth.php";
		break;

	case "login":
		
		$pers->login();
		break;

	case "logout":
		$pers->logout();
		break;

	case "add1":
		include "vue/abonnee/abn_register.php";
		break;

	case "contact":
		include "vue/abonnee/contact.php";
		break;


	case "add":
		$pers->add();
		break;

	case "supp":

		$pers->supp($cnx);
		break;

	case "edit":
		$pers->langue_pers = implode(",", $pers->langue_pers);
		$pers->interet_pers = implode(",", $pers->interet_pers);
		$pers->edit();
		break;

	case "edit1":

		$thispers = $pers->detail($id);
		
		$thispers->langue_pers = explode(",", $thispers->langue_pers);
		$thispers->interet_pers = explode(",", $thispers->interet_pers);
		include "../app/profile-edit.php";
		break;
	
}
