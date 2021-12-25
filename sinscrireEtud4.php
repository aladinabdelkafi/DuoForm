<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
  <link rel="shortcut icon" type="image/png" href="https://animaproject.s3.amazonaws.com/home/favicon.png" />
  <meta name="og:type" content="website" />
  <meta name="twitter:card" content="photo" />
  <link rel="stylesheet" type="text/css" href="css/sinscrire9.css" />
  <link rel="stylesheet" type="text/css" href="css/styleguide.css" />
  <link rel="stylesheet" type="text/css" href="css/globals.css" />
</head>

<body style="margin: 0; background: #ffffff">
  <input type="hidden" id="anPageName" name="page" value="sinscrire9" />
  <div class="container-center-horizontal">
    <div class="sinscrire9 screen">
      <div class="overlap-group">
        <div class="background"></div>
        <div class="localisation-et-transports roboto-normal-gunsmoke-15px">
          <span class="roboto-normal-gunsmoke-15px">Localisation et transports</span>
        </div>
        <div class="sinscrire roboto-bold-licorice-26px">
          <span class="roboto-bold-licorice-26px">s’inscrire</span>
        </div>
        <div class="home-indicators"></div>
        <div class="rectangle-7"></div>
        <form method="post" action="sinscrireEtud5.php">
          <input type="hidden" name="NomPernom" value="<?php echo $_POST['NomPernom']; ?>">
          <input type="hidden" name="Profil" value="<?php echo $_POST['Profil']; ?>">
          <input type="hidden" name="email" value="<?php echo $_POST['email']; ?>">
          <input type="hidden" name="pass" value="<?php echo $_POST['pass']; ?>">
          <input type="hidden" id="transport" name="transport" value="">
          <input type="hidden" name="NumTel" value="<?php echo $_POST['NumTel']; ?>">
          <input type="hidden" name="DateNais" value="<?php echo $_POST['DateNais']; ?>">
          <div class="place roboto-normal-oslo-gray-15px">
            <input class="roboto-normal-oslo-gray-15px" name="ville" type="text" placeholder="Ville" size="40">
          </div>

          <p class="quel-est-votre-ville roboto-medium-black-16px">
            <span class="roboto-medium-black-16px">Quel est votre ville ?</span>
          </p>
          <p class="quels-estsont-vos roboto-medium-black-16px">
            <span class="roboto-medium-black-16px">Quelle(s) est/sont vos préférences de rencontre ?</span>
          </p>
          <input class="btn roboto-medium-white-18px" type="submit" value="Continuer">
        </form>
        <button id="1" class="bouton-tudiant" value="Dans nos locaux" onclick="myFunction(this);">Dans nos locaux</button>
        <button id="2" class="bouton-tudiant-1" value="En visio" onclick="myFunction(this);">En visio</button>
        <button id="3" class="bouton-tudiant-2" value="Un lieu public" onclick="myFunction(this);">Un lieu public</button>
        <button id="5" class="bouton-tudiant-4" value="Autre" onclick="myFunction(this);">Autre</button>
        <p class="vous-tes-dja-inscrit-se-connecter roboto-normal-gunsmoke-15px">
          <span class="montserrat-normal-scarpa-flow-15px">Vous êtes déja inscrit ?</span><span class="montserrat-normal-gunsmoke-15px">&nbsp;</span><span class="montserrat-medium-governor-bay-15px"><a href="se-connecter.php">Se connecter</a></span>
        </p>
        <div class="rectangle-2625"></div>
        <div class="rectangle-2626"></div>
        <img class="logo" src="img/logo-15@2x.png" />

      </div>
    </div>
  </div>
</body>

</html>

<script type="text/javascript">
  const elements = [];

  function myFunction(btn) {
    var transport = document.getElementById('transport');
    if (elements.indexOf(btn.value) == -1) {
      elements.push(btn.value);
    } else {
      elements.splice(elements.indexOf(btn.value), 1);
    }
    elements.sort();
    btn.classList.toggle("active");
    transport.value = elements.join();
  }
</script>