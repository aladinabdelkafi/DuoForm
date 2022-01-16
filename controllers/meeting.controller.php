<?php //session_start();

include "../includes/fonction.class.php";
include "../models/meeting.class.php";

//initialisation des parametres
$fn = new fonction();

$id = "";
$sujet = "";
$date = "";
$lieu = "";
$etudiant = "";
$accompagnateur = "";
$action="";

//recupétation des variables externes
if (isset($_REQUEST['id']))
	$id = $_REQUEST['id'];

if (isset($_POST['sujet']))
	$sujet = $_POST['sujet'];

if (isset($_POST['date']))
	$date = $_POST['date'];

if (isset($_POST['lieu']))
	$lieu = $_POST['lieu'];

if (isset($_POST['etudiant']))
	$etudiant = $_POST['etudiant'];

if (isset($_POST['accompagnateur']))
	$accompagnateur = $_POST['accompagnateur'];

if(isset($_REQUEST['action']))
	$action=$_REQUEST['action'];
	
//creation de l'objet $id, $nom_pers, $prenom_pers,$adr_pers,$date_naiss_pers,$sex_pers,$interet_pers,$langue_pers, $email_pers, $mdp_pers, $tel_pers, $id_role
$meet = new meeting($id,$sujet,$date,$lieu,$etudiant,$accompagnateur);

switch ($action) {
	
	case "add":
		$meet->add();
		break;
	
}
