<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
  <link rel="shortcut icon" type="image/png" href="https://animaproject.s3.amazonaws.com/home/favicon.png" />
  <meta name="og:type" content="website" />
  <meta name="twitter:card" content="photo" />
  <link rel="stylesheet" type="text/css" href="css/sinscrire8.css" />
  <link rel="stylesheet" type="text/css" href="css/styleguide.css" />
  <link rel="stylesheet" type="text/css" href="css/globals.css" />
</head>

<body style="margin: 0; background: #ffffff">
  <input type="hidden" id="anPageName" name="page" value="sinscrire8" />
  <div class="container-center-horizontal">
    <div class="sinscrire8 screen">
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

        <form method="post" action="sinscrireProf4.php">
          <input type="hidden" name="NomPernom" value="<?php echo $_POST['NomPernom']; ?>">
          <input type="hidden" name="Profil" value="<?php echo $_POST['Profil']; ?>">
          <input type="hidden" name="email" value="<?php echo $_POST['email']; ?>">
          <input type="hidden" name="pass" value="<?php echo $_POST['pass']; ?>">
          <div class="text-16 roboto-normal-oslo-gray-15px">
            <span>+33</span>
            <input class="roboto-normal-oslo-gray-15px" type="text" name="NumTel" pattern="[0-9]{10}" placeholder="Téléphone" title="Numéro de tel de 10 chiffres">
          </div>
          <div class="tlphone roboto-medium-black-16px"><span class="roboto-medium-black-16px">Téléphone</span></div>
          <div class="rectangle-8"></div>
          <div class="jjmmaa roboto-normal-oslo-gray-15px">
            <input class="roboto-normal-oslo-gray-15px" type="text" name="DateNais" pattern="\d{1,2}/\d{1,2}/\d{4}" placeholder="JJ/MM/AAAA" size="40" title="JJ/MM/AAAA">
          </div>
          <div class="date-de-naissance roboto-medium-black-16px">
            <span class="roboto-medium-black-16px">Date de naissance</span>
          </div>
          <input class="btn sinscrire-1 roboto-medium-white-18px" type="submit" value="Continuer">
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