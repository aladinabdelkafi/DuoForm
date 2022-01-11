<?php
session_start();
if (!isset($_SESSION['personne'])) {
  header("location:welcome-page.php");
}

$today = date("Y-m-d");
$date = DateTime::createFromFormat("Y-m-d", $today);
$array = explode(',', $_SESSION['personne']->domaine);
?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
  <link rel="shortcut icon" type="image/png" href="https://animaproject.s3.amazonaws.com/home/favicon.png" />
  <meta name="og:type" content="website" />
  <meta name="twitter:card" content="photo" />
  <link rel="stylesheet" type="text/css" href="css/profil4.css" />
  <link rel="stylesheet" type="text/css" href="css/styleguide.css" />
  <link rel="stylesheet" type="text/css" href="css/globals.css" />
</head>

<body style="margin: 0; background: #ffffff">
  <input type="hidden" id="anPageName" name="page" value="profil4" />
  <div class="container-center-horizontal">
    <div class="profil4 screen">
      <div class="overlap-group4">
        <div class="background"></div>
        <div class="mon-profil roboto-bold-black-30px"><span class="roboto-bold-black-30px">Mon profil</span></div>

        <img class="avatars" src="img/<?php echo ($_SESSION['personne']->image); ?>" />
        <p class="bonjour-moi-cest-o">
        <?php echo ($_SESSION['personne']->bio); ?>
        </p>
        <div class="olivier-pouchoy roboto-medium-black-20-1px">
          <span class="roboto-medium-black-20-1px"><?php echo ($_SESSION['personne']->nom_prenom_pers); ?></span>
        </div>
        <div class="tag">
          <div class="communication-1 montserrat-medium-brilliant-rose-10px">
            <span class="montserrat-medium-brilliant-rose-10px"><?php echo ($_SESSION['personne']->email_pers); ?></span>
          </div>
        </div>
        <div class="tag-1">
          <div class="communication-2 montserrat-medium-brilliant-rose-10px">
            <span class="montserrat-medium-brilliant-rose-10px"><?php echo ($date->format("Y") - substr($_SESSION['personne']->date_naiss_pers, 6, 10) . " ans"); ?></span>
          </div>
        </div>
        <div class="tag-2">
          <div class="communication-3 montserrat-medium-brilliant-rose-10px">
            <span class="montserrat-medium-brilliant-rose-10px"><?php echo ($_SESSION['personne']->ville); ?></span>
          </div>
        </div>
        <div class="tag-3">
          <div class="communication montserrat-medium-brilliant-rose-10px">
            <span class="montserrat-medium-brilliant-rose-10px"><?php echo ($_SESSION['personne']->tel_pers); ?></span>
          </div>
        </div>
       
        <div class="modifier-mon-profil roboto-bold-brilliant-rose-13px">
          <span class="roboto-bold-brilliant-rose-13px">Modifier mon profil</span>
        </div>
        <div class="prochaines-runions roboto-medium-black-16px">
        <div style="margin-bottom: -12px;">Expériences</div>
        <img class="heartt" id="myImageId0" src="img/Vector1.png">
      </div>
      <div class="frame-3321">
        <div class="group-41">
          <div class="scolaire montserrat-semi-bold-eerie-black-9-1px">
            <span class="montserrat-semi-bold-eerie-black-9-1px">Scolaire</span>
          </div>
          <div class="tagg">
            <div class="communication-6 montserrat-medium-brilliant-rose-10px">
              <span class="montserrat-medium-brilliant-rose-10px">BTS - design graphique</span>
            </div>
          </div>
          <div class="tagg">
            <div class="communication-6 montserrat-medium-brilliant-rose-10px">
              <span class="montserrat-medium-brilliant-rose-10px">License - multimédia</span>
            </div>
          </div>
          <div class="tagg">
            <div class="communication-6 montserrat-medium-brilliant-rose-10px">
              <span class="montserrat-medium-brilliant-rose-10px">Stage agence Lyon</span>
            </div>
          </div>
        </div>
        <div class="frame-42">
          <div class="professionnelle montserrat-semi-bold-eerie-black-9-1px">
            <span class="montserrat-semi-bold-eerie-black-9-1px">Professionnelle</span>
          </div>
          <div class="tagg">
            <div class="communication-6 montserrat-medium-brilliant-rose-10px">
              <span class="montserrat-medium-brilliant-rose-10px">Freelance</span>
            </div>
          </div>
          <div class="tagg">
            <div class="communication-6 montserrat-medium-brilliant-rose-10px">
              <span class="montserrat-medium-brilliant-rose-10px">Stage en agence</span>
            </div>
          </div>
        </div>
      </div>

      <div class="prochaines-runions roboto-medium-black-16px">
        <div style="margin-bottom: -12px;">Compétences</div>
        <img class="heartt" id="myImageId1" src="img/Vector1.png">
      </div>
      <div class="frame-3321">
        <div class="group-41">
          <div class="scolaire montserrat-semi-bold-eerie-black-9-1px">
            <span class="montserrat-semi-bold-eerie-black-9-1px">Scolaire</span>
          </div>
          <div class="tagg">
            <div class="communication-6 montserrat-medium-brilliant-rose-10px">
              <span class="montserrat-medium-brilliant-rose-10px">BTS - design graphique</span>
            </div>
          </div>
          <div class="tagg">
            <div class="communication-6 montserrat-medium-brilliant-rose-10px">
              <span class="montserrat-medium-brilliant-rose-10px">License - multimédia</span>
            </div>
          </div>
          <div class="tagg">
            <div class="communication-6 montserrat-medium-brilliant-rose-10px">
              <span class="montserrat-medium-brilliant-rose-10px">Stage agence Lyon</span>
            </div>
          </div>
        </div>
        <div class="frame-42">
          <div class="professionnelle montserrat-semi-bold-eerie-black-9-1px">
            <span class="montserrat-semi-bold-eerie-black-9-1px">Professionnelle</span>
          </div>
          <div class="tagg">
            <div class="communication-6 montserrat-medium-brilliant-rose-10px">
              <span class="montserrat-medium-brilliant-rose-10px">Freelance</span>
            </div>
          </div>
          <div class="tagg">
            <div class="communication-6 montserrat-medium-brilliant-rose-10px">
              <span class="montserrat-medium-brilliant-rose-10px">Stage en agence</span>
            </div>
          </div>
        </div>
      </div>

      <div class="prochaines-runions roboto-medium-black-16px">
        <div style="margin-bottom: -12px;">Domaine</div>
        <img class="heartt" id="myImageId2" src="img/Vector1.png">
      </div>
      <div class="frame-3321">
        <div class="group-41">
          <?php
          foreach ($array as $row) {
          ?>
            <div class="tagg">
              <div class="communication-6 montserrat-medium-brilliant-rose-10px">
                <span class="montserrat-medium-brilliant-rose-10px"><?php echo ($row); ?></span>
              </div>
            </div>
          <?php } ?>
        </div>
      </div>


      </div>

      <div class="frame-3314">
        <a href="dashboard.php">
          <img class="x5_-elements_-navigation-home-on" src="img/5-elements-navigation-home-on-20@2x.png" />
        </a>
        <a href="contacts-messagerie.php">
          <div class="x5_-elements_-navigation-message-off"><img class="shape" src="img/shape-18@2x.png" /></div>
        </a>
        <a href="dashboard2.php">
          <img class="x5_-elements_-navigation-bell-off" src="img/5-elements-navigation-bell-off-20@2x.png" />
        </a>
        <a href="profil4.php">
          <div class="user-filled"><img class="group-18" src="img/group-18-12@2x.png" /></div>
        </a>
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
        document.getElementById(this.lastElementChild.id).src = "img/Vector1.png";
      } else {
        panel.style.display = "block";
        document.getElementById(this.lastElementChild.id).src = "img/Vector2.png";
      }
    });
  }
</script>