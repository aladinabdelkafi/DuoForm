<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
    <link rel="shortcut icon" type="image/png" href="https://animaproject.s3.amazonaws.com/home/favicon.png" />
    <meta name="og:type" content="website" />
    <meta name="twitter:card" content="photo" />
    <link rel="stylesheet" type="text/css" href="css/sinscrire12.css" />
    <link rel="stylesheet" type="text/css" href="css/styleguide.css" />
    <link rel="stylesheet" type="text/css" href="css/globals.css" />
  </head>
  <body style="margin: 0; background: #ffffff">
    <input type="hidden" id="anPageName" name="page" value="sinscrire12" />
    <div class="container-center-horizontal">
      <div class="sinscrire12 screen">
        <div class="overlap-group2">
          <div class="background"></div>
          <p class="une-petite-prsentat roboto-normal-gunsmoke-15px">
            <span class="roboto-normal-gunsmoke-15px">Une petite présentation de vous pour commencer ?</span>
          </p>
          <div class="qui-tes-vous roboto-bold-licorice-26px">
            <span class="roboto-bold-licorice-26px">QUI ÊTES-vous ?</span>
          </div>
          
          <div class="home-indicators"></div>
          <div class="rectangle-7"></div>


          <form method="post" action="sinscrireProf7.php">
          <input type="hidden" name="Domaine" value="<?php echo $_POST['Domaine']; ?>"/>
          <input type="hidden" name="Accompagnateur" value="<?php echo $_POST['Domaine']; ?>"/>
          <input type="hidden" name="NomPernom" value="<?php echo $_POST['NomPernom']; ?>">
          <input type="hidden" name="Profil" value="<?php echo $_POST['Profil']; ?>">
          <input type="hidden" name="email" value="<?php echo $_POST['email']; ?>">
          <input type="hidden" name="pass" value="<?php echo $_POST['pass']; ?>">
          <input type="hidden" name="transport" value="<?php echo $_POST['transport']; ?>">
          <input type="hidden" name="ville" value="<?php echo $_POST['ville']; ?>">
          <input type="hidden" name="NumTel" value="<?php echo $_POST['NumTel']; ?>">
          <input type="hidden" name="DateNais" value="<?php echo $_POST['DateNais']; ?>">
          <input type="hidden" name="nivEtudProf" value="<?php echo $_POST['nivEtudProf']; ?>">

        <p class="elle-apparatra-sur roboto-normal-oslo-gray-15px">
          <textarea class="roboto-normal-oslo-gray-15px" name="bio" placeholder="Elle apparaîtra sur votre profil étudiant mais vous pourrez la modifier à n’importe quel moment"></textarea>
        </p>
        <p class="vous-tes-dja-inscrit-se-connecter roboto-normal-gunsmoke-15px">
          <span class="montserrat-normal-scarpa-flow-15px">Vous êtes déja inscrit ?</span><span class="montserrat-normal-gunsmoke-15px">&nbsp;</span><span class="montserrat-medium-governor-bay-15px"><a href="se-connecter.php">Se connecter</a></span>
        </p>

        <input class="btn roboto-medium-white-18px" type="submit" value="Continuer">
        </form>


          <div class="rectangle-2625"></div>
          <div class="rectangle-2626"></div>
          <img class="logo" src="img/logo-16@2x.png" />
          <div class="ecrivez-une-mini-bio roboto-medium-black-16px">
            <span class="roboto-medium-black-16px">Ecrivez une mini bio</span>
          </div>
         
          <p class="ajouter-une-photo-pour-votre-profil roboto-medium-black-16px">
            <span class="roboto-medium-black-16px">Ajouter une photo pour votre profil</span>
          </p>
          <div class="overlap-group">
            <div class="x-une-photo roboto-normal-oslo-gray-15px">
              <span class="roboto-normal-oslo-gray-15px">Importer une photo</span>
            </div>
          </div>
          <div class="overlap-group1">
            <div class="x-une-photo roboto-normal-oslo-gray-15px">
              <span class="roboto-normal-oslo-gray-15px">Prendre une photo</span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
