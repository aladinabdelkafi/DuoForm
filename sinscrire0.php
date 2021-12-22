<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
    <link rel="shortcut icon" type="image/png" href="https://animaproject.s3.amazonaws.com/home/favicon.png" />
    <meta name="og:type" content="website" />
    <meta name="twitter:card" content="photo" />
    <link rel="stylesheet" type="text/css" href="css/sinscrire2.css" />
    <link rel="stylesheet" type="text/css" href="css/styleguide.css" />
    <link rel="stylesheet" type="text/css" href="css/globals.css" />
  </head>
  <body style="margin: 0; background: #ffffff">
    <input type="hidden" id="anPageName" name="page" value="sinscrire2" />
    <div class="container-center-horizontal">
      <div class="sinscrire2 screen">
        <div class="overlap-group">
          <div class="background"></div>
          <div class="informations-personnelles roboto-normal-gunsmoke-15px">
            <span class="roboto-normal-gunsmoke-15px">Informations personnelles</span>
          </div>
          <div class="sinscrire roboto-bold-licorice-26px">
            <span class="roboto-bold-licorice-26px">S’inscrire</span>
          </div>
          
          
          <div class="rectangle-7"></div>
         
          <p class="quel-votre-nom-et-prenom roboto-medium-black-16px">
            <span class="roboto-medium-black-16px">Quel votre nom et prenom</span>
          </p>
          <p class="vous-tes-dja-inscrit-se-connecter roboto-normal-gunsmoke-15px">
            <span class="montserrat-normal-scarpa-flow-15px">Vous êtes déja inscrit ?</span
            ><span class="montserrat-normal-gunsmoke-15px">&nbsp;</span
            ><span class="montserrat-medium-governor-bay-15px"><a href="se-connecter.php">Se connecter</a></span>
          </p>
          <!-- 
          <div class="btn" id="Continuer2">
            <div class="sinscrire-1 roboto-medium-white-18px">
              <span class="roboto-medium-white-18px">Continuer</span>
            </div>
          </div>
          -->
          <form method="post" action="" name="formIns" id="formIns">

            <div class="nom-et-prnom roboto-normal-oslo-gray-15px">
              <input class="roboto-normal-oslo-gray-15px" name="NomPernom" type="text" placeholder="Nom et Prénom" size="40">
            </div>
            

            <input id="Etudiant" class="bouton-tudiant etudiant" tabindex="1" type="button" name="profilEtud" value="Etudiant" onclick="chgAction('Etudiant')">
            <input id="Professionel" class="bouton-pro professionel" tabindex="1" type="button" name="profilProf" value="Professionel" onclick="chgAction('Professionel')">

            <input class="btn roboto-medium-white-18px" type="submit" value="Continuer">
          </form>
          
          <div class="je-suis roboto-medium-black-16px"><span class="roboto-medium-black-16px">Je suis:</span></div>
          <img class="logo" src="img/logo-15@2x.png" />
          
         
          
          <div class="rectangle-2625"></div>
        </div>
      </div>
    </div>
  </body>
</html>

<script type="text/javascript">
    function chgAction( action_name )
{
    if( action_name=="Etudiant" ) {
        document.formIns.action="sinscrireEtud2.php";
    }
    else if( action_name=="Professionel" ) {
        document.formIns.action = "sinscrireProf2.php";
    }
  
}
</script>