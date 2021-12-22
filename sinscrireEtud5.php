<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
  <link rel="shortcut icon" type="image/png" href="https://animaproject.s3.amazonaws.com/home/favicon.png" />
  <meta name="og:type" content="website" />
  <meta name="twitter:card" content="photo" />
  <link rel="stylesheet" type="text/css" href="css/sinscrire3.css" />
  <link rel="stylesheet" type="text/css" href="css/styleguide.css" />
  <link rel="stylesheet" type="text/css" href="css/globals.css" />
</head>

<body style="margin: 0; background: #ffffff">

  <div class="container-center-horizontal">
    <div class="sinscrire3 screen">
      <div class="overlap-group">
        <div class="background"></div>
        <form method="post" action="sinscrireEtud6.php">
          <input type="hidden" id="Domaine" name="Domaine" />
          <input type="hidden" id="Accompagnateur" name="Accompagnateur" />
          <input type="hidden" name="NomPernom" value="<?php echo $_POST['NomPernom']; ?>">
          <input type="hidden" name="Profil" value="<?php echo $_POST['Profil']; ?>">
          <input type="hidden" name="email" value="<?php echo $_POST['email']; ?>">
          <input type="hidden" name="pass" value="<?php echo $_POST['pass']; ?>">
          <input type="hidden" name="transport" value="<?php echo $_POST['transport']; ?>">
          <input type="hidden" name="ville" value="<?php echo $_POST['ville']; ?>">
          <input type="hidden" name="NumTel" value="<?php echo $_POST['NumTel']; ?>">
          <input type="hidden" name="DateNais" value="<?php echo $_POST['DateNais']; ?>">
          <div class="etude-et-accompagnement roboto-normal-gunsmoke-15px">
            <span class="roboto-normal-gunsmoke-15px">Etude et accompagnement</span>
          </div>
          <div class="sinscrire roboto-bold-licorice-26px">
            <span class="roboto-bold-licorice-26px">S’inscrire</span>
          </div>

          <div class="home-indicators"></div>
          <p class="quelle-est-votre-domaine-dtudes roboto-medium-black-16px">
            <span class="roboto-medium-black-16px">Quelle est votre domaine d’études</span>
          </p>


          <p class="vous-tes-dja-inscrit-se-connecter roboto-normal-gunsmoke-15px">
            <span class="montserrat-normal-scarpa-flow-15px">Vous êtes déja inscrit ?</span><span class="montserrat-normal-gunsmoke-15px">&nbsp;</span><span class="montserrat-medium-governor-bay-15px"><a href="se-connecter.php">Se connecter</a></span>
          </p>
          <input class="btn roboto-medium-white-18px" type="submit" value="Continuer">
        </form>

        <button class="bouton-tudiant" id="1" value="Droit" onclick="myFunctionDomaine(this);">Droit</button>
        <button class="bouton-tudiant-1" id="2" value="Communication" onclick="myFunctionDomaine(this);">Communication</button>
        <button class="bouton-tudiant-2" id="3" value="Sciences" onclick="myFunctionDomaine(this);">Sciences</button>
        <button class="bouton-tudiant-3" id="4" value="Dev" onclick="myFunctionDomaine(this);">Dev</button>
        <button class="bouton-tudiant-4" id="5" value="Commerce" onclick="myFunctionDomaine(this);">Commerce</button>
        <button class="bouton-tudiant-5" id="6" value="Psycho" onclick="myFunctionDomaine(this);">Psycho</button>
        <button class="bouton-tudiant-6" id="7" value="UX/UI" onclick="myFunctionDomaine(this);">UX/UI</button>
        <button class="bouton-tudiant-7" id="8" value="Autre" onclick="myFunctionDomaine(this);">Autre</button>

        <button class="bouton-tudiant-8" id="9" value="Finance" onclick="myFunctionAccompagnateur(this);">Finance</button>
        <button class="bouton-tudiant-9" id="10" value="Création d'entreprise" onclick="myFunctionAccompagnateur(this);">Création d'entreprise</button>
        <button class="bouton-tudiant-10" id="11" value="Marketing" onclick="myFunctionAccompagnateur(this);">Marketing</button>
        <button class="bouton-tudiant-11" id="12" value="UX" onclick="myFunctionAccompagnateur(this);">UX</button>
        <button class="bouton-tudiant-12" id="13" value="UI" onclick="myFunctionAccompagnateur(this);">UI</button>
        <button class="bouton-tudiant-13" id="14" value="Stage" onclick="myFunctionAccompagnateur(this);">Stage</button>
        <button class="bouton-tudiant-14" id="15" value="UX/UI" onclick="myFunctionAccompagnateur(this);">UX/UI</button>
        <button class="bouton-tudiant-15" id="16" value="Autre" onclick="myFunctionAccompagnateur(this);">Autre</button>

        <div class="rectangle-2625"></div>
        <img class="logo" src="img/logo-15@2x.png" />
        <p class="je-recherche-un-accompagnateur-dans roboto-medium-black-16px">
          <span class="roboto-medium-black-16px">Je recherche un accompagnateur dans:</span>
        </p>

        <div class="rectangle-2626"></div>
      </div>
    </div>
  </div>
</body>

</html>


<script type="text/javascript">
  const elementsDomaine = [];
  const elementsAccompagnateur = [];

  function myFunctionDomaine(btn) {
    var Domaine = document.getElementById('Domaine');
    if (elementsDomaine.indexOf(btn.value) == -1) {
      elementsDomaine.push(btn.value);
    } else {
      elementsDomaine.splice(elementsDomaine.indexOf(btn.value), 1);
    }

    btn.classList.toggle("active");
    Domaine.value = elementsDomaine.join();

  }

  function myFunctionAccompagnateur(btn) {
    var Accompagnateur = document.getElementById('Accompagnateur');
    if (elementsAccompagnateur.indexOf(btn.value) == -1) {
      elementsAccompagnateur.push(btn.value);
    } else {
      elementsAccompagnateur.splice(elementsAccompagnateur.indexOf(btn.value), 1);
    }

    btn.classList.toggle("active");
    Accompagnateur.value = elementsAccompagnateur.join();

  }
</script>