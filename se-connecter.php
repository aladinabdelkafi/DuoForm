<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
    <link rel="shortcut icon" type="image/png" href="https://animaproject.s3.amazonaws.com/home/favicon.png" />
    <meta name="og:type" content="website" />
    <meta name="twitter:card" content="photo" />
    <link rel="stylesheet" type="text/css" href="css/se-connecter.css" />
    <link rel="stylesheet" type="text/css" href="css/styleguide.css" />
    <link rel="stylesheet" type="text/css" href="css/globals.css" />
  </head>
  <body style="margin: 0; background: #ffffff">
    
    <div class="container-center-horizontal">
      <div class="se-connecter screen">
        <div class="overlap-group2">
          <div class="background"></div>
          <p class="completez-cette-tap roboto-normal-gunsmoke-15px">
            <span class="roboto-normal-gunsmoke-15px">Completez cette étape pour apprendre à vous connaitre</span>
          </p>
          <div class="se-connecter-1 roboto-bold-licorice-26px">
            <span class="roboto-bold-licorice-26px">Se connecter</span>
          </div>
          
          <div class="home-indicators"></div>
          <img class="logo" src="img/logo-15@2x.png" />
          <div class="votre-email roboto-medium-black-16px">
            <span class="roboto-medium-black-16px">Votre Email</span>
          </div>
          <div class="mot-de-passe roboto-medium-black-16px">
            <span class="roboto-medium-black-16px">Mot de passe</span>
          </div>
          <div class="overlap-group">
            <div class="bastienboisjotuniv-lyon2fr roboto-normal-pewter-15px">
              
              <input class="roboto-normal-pewter-15px" type="text" placeholder="bastien.boisjot@univ-lyon2.fr" size="40">
            </div>
          </div>
          <div class="overlap-group1">
            <div class="text-17 roboto-normal-pewter-15px">
              
              <input class="roboto-normal-pewter-15px" type="password" placeholder="*************" size="40">
            </div>
          </div>
          <p class="mot-de-passe-perdu roboto-normal-gunsmoke-15px">
            <span class="roboto-normal-gunsmoke-15px">Mot de passe perdu ?</span>
          </p>
          <p class="vous-navez-pas-de-compte roboto-normal-gunsmoke-15px">
            <span class="montserrat-normal-scarpa-flow-15px">Vous n’avez pas de compte ?</span
            ><span class="montserrat-normal-gunsmoke-15px"></span>
          </p>
          <div class="btn" id="Connexion">
            <div class="connexion roboto-medium-white-18px">
              <span class="roboto-medium-white-18px">Connexion</span>
            </div>
          </div>
          <div class="sinscrire montserrat-medium-governor-bay-15px">
            <span class="montserrat-medium-governor-bay-15px"><a href="sinscrire.php">S'inscrire</a></span>
          </div>
          
        </div>
      </div>
    </div>
  </body>
</html>

<script type="text/javascript">
    document.getElementById("Connexion").onclick = function () {
        location.href = "home.php";
    };
</script>
