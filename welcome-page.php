<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
    <link rel="shortcut icon" type="image/png" href="https://animaproject.s3.amazonaws.com/home/favicon.png" />
    <meta name="og:type" content="website" />
    <meta name="twitter:card" content="photo" />
    <link rel="stylesheet" type="text/css" href="css/welcome-page.css" />
    <link rel="stylesheet" type="text/css" href="css/styleguide.css" />
    <link rel="stylesheet" type="text/css" href="css/globals.css" />
  </head>
  <body style="margin: 0; background: #ffffff">
    <input type="hidden" id="anPageName" name="page" value="welcome-page" />
    <div class="container-center-horizontal">
      <div class="welcome-page screen">
        
        <img class="goalpana" src="img/goal-pana-1@1x.png" />
        <div class="tout-les-meilleurs-a roboto-medium-black-34px">
          <span class="roboto-medium-black-34px">Tout les meilleurs accompagnateurs, réunis ici</span>
        </div>
        <p class="les-accompagnateurs roboto-medium-pewter-15px">
          <span class="roboto-medium-pewter-15px"
            >Les accompagnateurs de Duo Form vous aideront à atteindre vos objectifs les plus ambitieux. Allez,
            atteignons-les ensemble !</span
          >
        </p>
        <div class="btn" id="Sinscrire">
          <div class="sinscrire roboto-medium-white-18px"><span class="roboto-medium-white-18px">S'inscrire</span></div>
        </div>

        <div class="btn-1 border-1px-governor-bay" id="Seconnecter">
          <div class="sinscrire-1 roboto-medium-governor-bay-18px">
            <span class="roboto-medium-governor-bay-18px">Se connecter</span>
          </div>
        </div>

        <p class="rejoignez-plus-de-10 roboto-normal-pewter-13px">
          <span class="roboto-normal-pewter-13px"
            >Rejoignez plus de 100,000 utilistateurs à atteindre leurs objectifs</span
          >
        </p>
        <img class="logo" src="img/logo-15@2x.png" />
        <div class="home-indicators"></div>
      </div>
    </div>
  </body>
</html>
<script type="text/javascript">
    document.getElementById("Sinscrire").onclick = function () {
        location.href = "sinscrire.php";
    };
</script>

<script type="text/javascript">
    document.getElementById("Seconnecter").onclick = function () {
        location.href = "se-connecter.php";
    };
</script>