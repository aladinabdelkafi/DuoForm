<?php
session_start();
if(!isset($_SESSION['personne'])){
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
    <link rel="stylesheet" type="text/css" href="css/dashboard.css" />
    <link rel="stylesheet" type="text/css" href="css/styleguide.css" />
    <link rel="stylesheet" type="text/css" href="css/globals.css" />
  </head>
  <body style="margin: 0; background: #ffffff">
    <input type="hidden" id="anPageName" name="page" value="dashboard" />
    <div class="container-center-horizontal">
      <div class="dashboard screen">
        <div class="overlap-group1">
          <div class="background"></div>
          <div class="vos-prcdents-tudiants roboto-medium-black-16px">
            <span class="roboto-medium-black-16px">Vos précédents étudiants</span>
          </div>
         

          <div class="prochaines-runions roboto-medium-black-16px">
          <div style="margin-bottom: -12px;">Prochaines rencontres</div>
          <img class="heart" id="myImageId2" src="img/Heart.png">
        </div>
        <div class="frame-3322" style="display: block; overflow:scroll;"> 
        <?php
          include "models/meeting.class.php";
          $meeting = new meeting("", "", "", "", "", "");
          $res_meeting = $meeting->listeNexMeeingPro($_SESSION['personne']->id);
          if (empty($res_meeting)) {
           ?>
           <div class="card-4">
            <div class="frame-3317">
              <div class="group-29-1">
                <div class="type-dactivit roboto-medium-oslo-gray-14px">
                  <span class="roboto-medium-oslo-gray-14px">Vous n'avez pas encore de rendez-vous </span>
                </div>
              </div>
            </div>
          </div>
          <?php
          }
          else{
          foreach ($res_meeting as $row) {
          ?>
            <div class="card">
              <div class="frame-3316">
                <img class="avatars" src="img/avatars-7@2x.png" />
                <div class="helath-chat-with-lidia roboto-medium-black-16px">
                  <span class="roboto-medium-black-16px"><?php echo ($row->sujet); ?></span>
                </div>
                <div class="type-dactivit roboto-medium-oslo-gray-14px">
                  <span class="roboto-medium-oslo-gray-14px"><?php echo ($row->date); ?></span>
                </div>
              </div>
              
            </div>
          <?php } }?>
        </div>

          <p class="cest-un-beau-jour-p roboto-normal-gunsmoke-15px-2">
            <span class="roboto-normal-gunsmoke-15px-2">C’est un beau jour pour donner envie d’apprendre !</span>
          </p>
          <div class="bonjour-olivier roboto-bold-black-30px">
            <span class="roboto-bold-black-30px">Bonjour, <?php echo($_SESSION['personne']->nom_prenom_pers); ?></span>
          </div>

         

          <div class="frame-3314">
          <a href="dashboard.php"><img class="x5_-elements_-navigation-home-on" src="img/5-elements-navigation-home-on-9@2x.png" /></a>
          
          <a href="contacts-messagerie.php">
            <div class="x5_-elements_-navigation-message-off"><img class="shape" src="img/shape-18@2x.png" /></div>
          </a>
          <a href="dashboard2.php"><img class="x5_-elements_-navigation-bell-off" src="img/5-elements-navigation-bell-off-20@2x.png" /></a>
          <a href="profil4.php">
            <div class="user-filled"><img class="group-18" src="img/group-18-19@2x.png" /></div>
          </a>
        </div>
         
          
          <div class="frame-58">
            <div class="card-4">
              <img class="avatars" src="img/avatars-5@2x.png" />
              <div class="frame-3317">
                <div class="helath-chat-with-lidia-1 roboto-medium-black-16px">
                  <span class="roboto-medium-black-16px">Philomena Tiret</span>
                </div>
                <div class="x5_-elements_-navigation-star-on-default-1">
                  <div class="text roboto-medium-mid-gray-12px">
                    <span class="roboto-medium-mid-gray-12px">4.95</span>
                  </div>
                  <img class="path" src="img/path-9@2x.png" />
                </div>
              </div>
            </div>
            <div class="card">
              <img class="avatars" src="img/avatars-7@2x.png" />
              <div class="frame-3317">
                <div class="helath-chat-with-lidia roboto-medium-black-16px">
                  <span class="roboto-medium-black-16px">Joris Delacroix</span>
                </div>
                <div class="x5_-elements_-navigation-star-on-default">
                  <div class="text roboto-medium-mid-gray-12px">
                    <span class="roboto-medium-mid-gray-12px">4.95</span>
                  </div>
                  <img class="path" src="img/path-9@2x.png" />
                </div>
              </div>
            </div>
            <div class="card">
              <img class="avatars" src="img/avatars-7@2x.png" />
              <div class="frame-3317">
                <div class="helath-chat-with-lidia roboto-medium-black-16px">
                  <span class="roboto-medium-black-16px">Joris Delacroix</span>
                </div>
                <div class="x5_-elements_-navigation-star-on-default">
                  <div class="text roboto-medium-mid-gray-12px">
                    <span class="roboto-medium-mid-gray-12px">4.95</span>
                  </div>
                  <img class="path" src="img/path-9@2x.png" />
                </div>
              </div>
            </div>
          </div>
          <div class="home-indicators"></div>
          <div class="search-box">
            <div class="overlap-group">
              <div class="rechercher roboto-normal-oslo-gray-15px-2">
                <span class="roboto-normal-oslo-gray-15px-2">Rechercher...</span>
              </div>
            </div>
            <div class="search-filter"><img class="shape-1" src="img/shape-15@2x.png" /></div>
          </div>
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