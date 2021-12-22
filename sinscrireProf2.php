<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
  <link rel="shortcut icon" type="image/png" href="https://animaproject.s3.amazonaws.com/home/favicon.png" />
  <meta name="og:type" content="website" />
  <meta name="twitter:card" content="photo" />
  <link rel="stylesheet" type="text/css" href="css/sinscrire6.css" />
  <link rel="stylesheet" type="text/css" href="css/styleguide.css" />
  <link rel="stylesheet" type="text/css" href="css/globals.css" />
</head>

<body style="margin: 0; background: #ffffff">
  <input type="hidden" id="anPageName" name="page" value="sinscrire6" />
  <div class="container-center-horizontal">
    <div class="sinscrire6 screen">
      <div class="overlap-group">
        <div class="background"></div>
        <div class="informations-personnelles roboto-normal-gunsmoke-15px">
          <span class="roboto-normal-gunsmoke-15px">Informations personnelles</span>
        </div>
        <div class="sinscrire roboto-bold-licorice-26px">
          <span class="roboto-bold-licorice-26px">S’inscrire</span>
        </div>
        <img class="logo" src="img/logo-16@2x.png" />

        <div class="home-indicators"></div>
        <div class="rectangle-7"></div>


        <form method="post" action="sinscrireProf3.php">
          <input type="hidden" name="NomPernom" value="<?php echo $_POST['NomPernom']; ?>">
          <input type="hidden" name="Profil" value="Professionel">
          <div class="quel-votre-email roboto-medium-black-16px">
            <span class="roboto-medium-black-16px">Quel votre Email</span>
          </div>
          <div class="bastienboisjotuniv-lyon2fr roboto-normal-oslo-gray-15px">
            <input class="roboto-normal-oslo-gray-15px" name="email" type="text" placeholder="bastien.boisjot@univ-lyon2.fr" size="40">
          </div>


          <p class="et-votre-mot-de-passe roboto-medium-black-16px">
            <span class="roboto-medium-black-16px">Et votre mot de passe</span>
          </p>
          <div class="rectangle-2613"></div>
          <div class="text-14 roboto-normal-oslo-gray-15px">
            <input class="roboto-normal-oslo-gray-15px" type="password" name="pass" placeholder="*************" size="40">
          </div>
          <input class="btn roboto-medium-white-18px" type="submit" value="Continuer">
        </form>


        <p class="vous-tes-dja-inscrit-se-connecter roboto-normal-gunsmoke-15px">
          <span class="montserrat-normal-scarpa-flow-15px">Vous êtes déja inscrit ?</span><span class="montserrat-normal-gunsmoke-15px">&nbsp;</span><span class="montserrat-medium-brilliant-rose-15px"><a href="se-connecter.php">Se connecter</a></span>
        </p>
        <div class="rectangle-2626"></div>
        <div class="rectangle-2625"></div>

      </div>
    </div>
  </div>
</body>

</html>