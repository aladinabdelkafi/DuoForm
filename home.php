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
  <link rel="stylesheet" type="text/css" href="css/home.css" />
  <link rel="stylesheet" type="text/css" href="css/styleguide.css" />
  <link rel="stylesheet" type="text/css" href="css/globals.css" />
</head>

<body style="background: #ffffff">
  <input type="hidden" id="anPageName" name="page" value="home" />
  <div class="container-center-horizontal">
    <div class="home screen">
      <div class="overlap-group1">
        <div class="background"></div>

        <p class="cest-un-beau-jour-p roboto-normal-gunsmoke-15px-2">
          <span class="roboto-normal-gunsmoke-15px-2">C’est un beau jour pour apprendre de nouvelles choses !</span>
        </p>


        <div class="bonjour-olivier roboto-bold-black-30px">
          <span class="roboto-bold-black-30px">Bonjour, <?php echo ($_SESSION['personne']->nom_prenom_pers); ?></span>
        </div>



        <div class="prochaines-runions roboto-medium-black-16px">
          <div style="margin-bottom: -12px;">prochains rendez-vous</div>
          <img class="heart" id="myImageId0" src="img/Heart.png">
        </div>
        <div class="frame-3321">
          <?php
          include "models/meeting.class.php";
          $meeting = new meeting("", "", "", "", "", "");
          $res_meeting = $meeting->listeNexMeeingEtudiant($_SESSION['personne']->id);
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
          } else {
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
          <?php }
          } ?>
          <input type="button" onclick="document.location.href='explorer.php'" class="btn" value="Prendre un rendez-vous">
        </div>

        <div class="prochaines-runions roboto-medium-black-16px">
          <div style="margin-bottom: -12px;">Vos accompagnateurs favoris</div>
          <img class="heart" id="myImageId1" src="img/Heart.png">
        </div>
        <div class="frame-3321">
          <div class="card-4">
            <div class="frame-3317">
              <div class="group-29-1">
                <div class="type-dactivit roboto-medium-oslo-gray-14px">
                  <span class="roboto-medium-oslo-gray-14px">Vous n'avez pas encore de rendez-vous </span>
                </div>
              </div>
            </div>
          </div>
          <input type="button" onclick="document.location.href='explorer.php'" class="btn" value="Trouver des accompagnateurs">
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


        <div class="frame-3314">
          <a href="home.php"><img class="x5_-elements_-navigation-home-on" src="img/5-elements-navigation-home-on-1@2x.png" /></a>
          <a href="explorer.php">
            <div class="x5_-elements_-navigation-message-off"><img class="subtract" src="img/subtract-11@2x.png" /></div>
          </a>
          <a href="messagerie.php">
            <div class="x5_-elements_-navigation-message-off"><img class="shape" src="img/shape-18@2x.png" /></div>
          </a>
          <a href="planning.php"><img class="x5_-elements_-navigation-bell-off" src="img/5-elements-navigation-bell-off-20@2x.png" /></a>
          <a href="profil.php">
            <div class="x5_-elements_-navigation-message-off"><img class="group-18" src="img/group-18-19@2x.png" /></div>
          </a>
        </div>





        <div class="home-indicators"></div>
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