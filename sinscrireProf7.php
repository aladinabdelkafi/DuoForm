<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
    <link rel="shortcut icon" type="image/png" href="https://animaproject.s3.amazonaws.com/home/favicon.png" />
    <meta name="og:type" content="website" />
    <meta name="twitter:card" content="photo" />
    <link rel="stylesheet" type="text/css" href="css/sinscrire14.css" />
    <link rel="stylesheet" type="text/css" href="css/styleguide.css" />
    <link rel="stylesheet" type="text/css" href="css/globals.css" />
  </head>
  <body style="margin: 0; background: #ffffff">
    <input type="hidden" id="anPageName" name="page" value="sinscrire14" />
    <div class="container-center-horizontal">
      <div class="sinscrire14 screen">
        <div class="overlap-group">
          <div class="background"></div>
         
          <form method="post" action="controllers/personne.controller.php?action=add" method="POST">
          <input type="hidden" name="domaine" value="<?php echo $_POST['Domaine']; ?>" />
          <input type="hidden" name="interet_pers" value="<?php echo $_POST['Accompagnateur']; ?>" />
          <input type="hidden" name="nom_prenom_pers" value="<?php echo $_POST['NomPernom']; ?>">
          <input type="hidden" name="id_role" value="<?php echo $_POST['Profil']; ?>">
          <input type="hidden" name="email_pers" value="<?php echo $_POST['email']; ?>">
          <input type="hidden" name="mdp_pers" value="<?php echo $_POST['pass']; ?>">
          <input type="hidden" name="preferences_rencontre" value="<?php echo $_POST['transport']; ?>">
          <input type="hidden" name="ville" value="<?php echo $_POST['ville']; ?>">
          <input type="hidden" name="bio" value="<?php echo $_POST['bio']; ?>">
          <input type="hidden" name="tel_pers" value="<?php echo $_POST['NumTel']; ?>">
          <input type="hidden" name="date_naiss_pers" value="<?php echo $_POST['DateNais']; ?>">
          <input type="hidden" name="nivEtudProf" value="<?php echo $_POST['nivEtudProf']; ?>">
          <div class="home-indicators"></div>
          <p class="commencez-laventure roboto-normal-gunsmoke-15px">
            <span class="roboto-normal-gunsmoke-15px">Commencez l’aventure Duo Form maintenant !</span>
          </p>
          <div class="votre-inscription-est-termine roboto-medium-black-29px">
            <span class="roboto-medium-black-29px">Votre inscription <br />est terminée</span>
          </div>
          <div class="ellipse-16"></div>
          <img class="vector-24" src="img/vector-24-1@2x.png" />
          <input class="btn sinscrire roboto-medium-white-18px" type="submit" value="Commencer">
          </form>

        </div>
      </div>
    </div>
  </body>
</html>
