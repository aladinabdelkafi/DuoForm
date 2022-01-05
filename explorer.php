<?php
session_start();
if (!isset($_SESSION['personne'])) {
  header("location:welcome-page.php");
}
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
    <link rel="shortcut icon" type="image/png" href="https://animaproject.s3.amazonaws.com/home/favicon.png" />
    <meta name="og:type" content="website" />
    <meta name="twitter:card" content="photo" />
    <link rel="stylesheet" type="text/css" href="css/explorer.css" />
    <link rel="stylesheet" type="text/css" href="css/styleguide.css" />
    <link rel="stylesheet" type="text/css" href="css/globals.css" />

    
    
  </head>
  <body style="margin: 0; background: #ffffff">
    <input type="hidden" id="anPageName" name="page" value="explorer" />
    <div class="container-center-horizontal">
      <div class="explorer screen">
        <div class="overlap-group5">
          <div class="overlap-group4">
            <div class="rechercher-des-accompagnateurs roboto-bold-black-30px">
              <span class="roboto-bold-black-30px">Rechercher des <br />accompagnateurs</span>
            </div>
            <!--<div class="status-bar">
              <div class="time sfprotext-semi-bold-black-15px">
                <span class="sfprotext-semi-bold-black-15px">9:41</span>
              </div>
              <img class="cellular-connection" src="img/cellular-connection-41@2x.png" />
              <img class="wifi" src="img/wifi-20@2x.png" />
              <img class="battery" src="img/battery-40@2x.png" />
            </div>-->
          </div>
          <div class="love"><img class="oval" src="img/oval-3@2x.png" /></div>
        </div>
        <p class="il-y-a-plus-de-3912 roboto-normal-gunsmoke-15px">
          <span class="roboto-normal-gunsmoke-15px">Il y a plus de 3912 accompagnateurs sur Duo Form !</span>
        </p>
        <div class="search-box">
          <div class="overlap-group">
            <div class="rechercher roboto-normal-oslo-gray-15px-2">
              <span class="roboto-normal-oslo-gray-15px-2">Rechercher...</span>
            </div>
          </div>
          <div class="overlap-group1"><img class="shape" src="img/shape-15@2x.png" /></div>
        </div>
        <div class="x-filter">
          <div class="overlap-group-1">
            <div class="x"><span>X</span></div>
            <div class="english-only"><span>Français uniquement</span></div>
          </div>
        </div>
        <div class="overlap-group2">
          <p class="les-accompagnateurs-les-mieux-nots roboto-medium-black-16px">
            <span class="roboto-medium-black-16px">Les accompagnateurs les mieux notés</span>
          </p>
          <!--<div class="card">
            <div class="frame-3316">
              <img class="avatars" src="img/avatars-19@2x.png" />
              <img class="heart" src="img/heart-16@2x.png" />
            </div>
            <div class="frame-3317">
              <div class="group-29">
                <div class="helath-chat-with-lidia roboto-medium-black-16px">
                  <span class="roboto-medium-black-16px">Prénom Nom</span>
                </div>
                <div class="type-dactivit roboto-medium-oslo-gray-14px">
                  <span class="roboto-medium-oslo-gray-14px">Type d’activité</span>
                </div>
              </div>
              <div class="x5_-elements_-navigation-star-on-default">
                <div class="text roboto-medium-mid-gray-12px">
                  <span class="roboto-medium-mid-gray-12px">4.95</span>
                </div>
                <img class="path" src="img/path-9@2x.png" />
              </div>
            </div>
          </div>
          <div class="card-1">
            <div class="frame-3316-1">
              <img class="avatars" src="img/avatars-19@2x.png" />
              <img class="heart-1" src="img/heart-16@2x.png" />
            </div>
            <div class="frame-3317-1">
              <div class="group-29">
                <div class="helath-chat-with-lidia roboto-medium-black-16px">
                  <span class="roboto-medium-black-16px">Prénom Nom</span>
                </div>
                <div class="type-dactivit roboto-medium-oslo-gray-14px">
                  <span class="roboto-medium-oslo-gray-14px">Type d’activité</span>
                </div>
              </div>
              <div class="x5_-elements_-navigation-star-on-default-1">
                <div class="text roboto-medium-mid-gray-12px">
                  <span class="roboto-medium-mid-gray-12px">4.95</span>
                </div>
                <img class="path" src="img/path-9@2x.png" />
              </div>
            </div>
          </div>
          <img class="card-2" src="img/card-9@2x.png" />
          <img class="card-3" src="img/card-10@2x.png" />
          <img class="card-4" src="img/card-11@2x.png" />
        </div>
        <div class="vos-recommandations roboto-medium-black-16px">
          <span class="roboto-medium-black-16px">Vos recommandations</span>
        </div>-->

        

        
        <div class="overlap-group3">
          
          <div class="frame-3314">
            <img class="x5_-elements_-navigation-home-on" src="img/5-elements-navigation-home-on-20@2x.png" />
            <div class="overlap-group-2"><img class="subtract" src="img/subtract-10@2x.png" /></div>
            <div class="x5_-elements_-navigation-message-off"><img class="shape-1" src="img/shape-18@2x.png" /></div>
            <img class="x5_-elements_-navigation-bell-off" src="img/5-elements-navigation-bell-off-20@2x.png" />
            <div class="user-filled"><img class="group-18" src="img/group-18-19@2x.png" /></div>
          </div>
          <div class="home-indicators"></div>
        </div>
        <div class="prochaines-runions roboto-medium-black-16px">
          <div style="margin-bottom: -12px;">Vos recommandations</div>
          <img class="heart" id="myImageId2" src="img/Heart.png">
        </div>
        <div class="frame-3322">
          <?php
          include "models/personne.class.php";
          $personne = new personne("", "", "", "", "", "", "", "", "", "", "", "", "");
          $res_pers = $personne->getProRecommandations();

          foreach ($res_pers as $row) {
            if ($row->id != null) {
          ?>
              <a href="prendre-rdv.php?pers=<?php echo($row->id); ?>">
                <div class="card">
                  <div class="frame-3316">
                    <img class="avatars" src="img/avatars-7@2x.png" />
                    <div class="helath-chat-with-lidia roboto-medium-black-16px">
                      <span class="roboto-medium-black-16px"><?php echo ($row->nom_prenom_pers); ?></span>
                    </div>
                    <div class="type-dactivit roboto-medium-oslo-gray-14px">
                      <span class="roboto-medium-oslo-gray-14px"><?php echo ($row->domaine); ?></span>
                    </div>
                  </div>
                  <img class="heart-1" src="img/heart-16@2x.png" />
                </div>

              </a>
          <?php }
          } ?>
        </div>
      </div>
    </div>
  </body>
</html>
<script>
  var acc = document.getElementsByClassName("prochaines-runions");
  var i;

  for (i = 0; i < acc.length; i++) {

    acc[i].addEventListener("click", function() {
      this.classList.toggle("active");
      var panel = this.nextElementSibling;

      if (panel.style.display === "block") {
        panel.style.display = "none";
        document.getElementById(this.lastElementChild.id).src = "img/Heart.png";
      } else {
        panel.style.display = "block";
        document.getElementById(this.lastElementChild.id).src = "img/Heart (1).png";
      }
    });
  }
</script>