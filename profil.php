<?php

use function PHPSTORM_META\type;

session_start();
if (!isset($_SESSION['personne'])) {
  header("location:welcome-page.php");
}

$today = date("Y-m-d"); 
$date = DateTime::createFromFormat("Y-m-d", $today );


//$array = explode(',', $_SESSION['personne']->domaine);
//print_r($array);
//exit;
?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
  <link rel="shortcut icon" type="image/png" href="https://animaproject.s3.amazonaws.com/home/favicon.png" />
  <meta name="og:type" content="website" />
  <meta name="twitter:card" content="photo" />
  <link rel="stylesheet" type="text/css" href="css/profil.css" />
  <link rel="stylesheet" type="text/css" href="css/styleguide.css" />
  <link rel="stylesheet" type="text/css" href="css/globals.css" />
</head>

<body style="margin: 0; background: #ffffff">
  <input type="hidden" id="anPageName" name="page" value="profil" />
  <div class="container-center-horizontal">
    <div class="profil screen">

      <div class="flex-row">
        <div class="flex-col">
          <div class="mon-profil roboto-bold-black-30px"><span class="roboto-bold-black-30px">Mon profil</span></div>
          <div class="bastien-boisjot roboto-medium-black-20-1px">
            <span class="roboto-medium-black-20-1px"><?php echo ($_SESSION['personne']->nom_prenom_pers); ?></span>
          </div>
          <div class="flex-row-1">
            <div class="tag">
              <div class="communication montserrat-medium-governor-bay-10px">
                <span class="montserrat-medium-governor-bay-10px"><?php echo ($date->format("Y") - substr($_SESSION['personne']->date_naiss_pers, 6, 10)." ans"); ?></span>
              </div>
            </div>
            <div class="tag">
              <div class="communication montserrat-medium-governor-bay-10px">
                <span class="montserrat-medium-governor-bay-10px"><?php echo ($_SESSION['personne']->ville); ?></span>
              </div>
            </div>
          </div>

          <div class="flex-row-1">
            <div class="tag">
              <div class="communication montserrat-medium-governor-bay-10px">
                <span class="montserrat-medium-governor-bay-10px"><?php echo ($_SESSION['personne']->email_pers); ?></span>
              </div>
            </div>
          </div>

          <div class="flex-row-1">
            <div class="tag">
              <div class="communication montserrat-medium-governor-bay-10px">
                <span class="montserrat-medium-governor-bay-10px"><?php echo ($_SESSION['personne']->tel_pers); ?></span>
              </div>
            </div>
          </div>
         
         
        </div>
        <img class="unsplashey-fbj-k-wl-r2g" src="img/unsplash-eyfbjkwlr2g-2@2x.png" />
      </div>
      <p class="bonjour-moi-cest-p">
        <?php echo($_SESSION['personne']->bio); ?>
      </p>
      <div class="flex-row-3">
        <div class="modifier-mon-profil roboto-bold-governor-bay-13px">
          <span class="roboto-bold-governor-bay-13px">Modifier mon profil</span>
        </div>
        <img class="iconmonstr-share-10-1" src="img/iconmonstr-share-10-1-1@2x.png" />
      </div>
      <div class="frame-41 roboto-medium-black-14px">
        <div class="card-profil-1">
          <div class="group-36">
            <div class="helath-chat-with-lidia roboto-medium-black-14px">
              <span class="roboto-medium-black-14px">Expériences</span>
            </div>
            <img class="heart" src="img/heart-10@2x.png" />
          </div>
          <img class="vector-11" src="img/vector-11-4@2x.png" />
          <div class="frame-43">
            <div class="group-41">
              <div class="scolaire montserrat-semi-bold-eerie-black-9-1px">
                <span class="montserrat-semi-bold-eerie-black-9-1px">Scolaire</span>
              </div>
              <div class="tag-6">
                <div class="communication-6 montserrat-medium-governor-bay-10px">
                  <span class="montserrat-medium-governor-bay-10px">BTS - design graphique</span>
                </div>
              </div>
              <div class="tag-7">
                <div class="communication-7 montserrat-medium-governor-bay-10px">
                  <span class="montserrat-medium-governor-bay-10px">License - multimédia</span>
                </div>
              </div>
              <div class="tag-8">
                <div class="communication-8 montserrat-medium-governor-bay-10px">
                  <span class="montserrat-medium-governor-bay-10px">Stage agence Lyon</span>
                </div>
              </div>
            </div>
            <div class="frame-42">
              <div class="professionnelle montserrat-semi-bold-eerie-black-9-1px">
                <span class="montserrat-semi-bold-eerie-black-9-1px">Professionnelle</span>
              </div>
              <div class="tag-9">
                <div class="communication-9 montserrat-medium-governor-bay-10px">
                  <span class="montserrat-medium-governor-bay-10px">Freelance</span>
                </div>
              </div>
              <div class="tag-10">
                <div class="communication-10 montserrat-medium-governor-bay-10px">
                  <span class="montserrat-medium-governor-bay-10px">Stage en agence</span>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="card-profil">
          <div class="helath-chat-with-lidia-1"><span class="roboto-medium-black-14px">Compétences</span></div>
          <img class="heart-1" src="img/heart-13@2x.png" />
        </div>
       
      </div>
      <div class="frame-3314">
        <img class="x5_-elements_-navigation-home-on" src="img/5-elements-navigation-home-on-20@2x.png" />
        <div class="iconly"><img class="subtract" src="img/subtract-11@2x.png" /></div>
        <div class="x5_-elements_-navigation-message-off"><img class="shape" src="img/shape-18@2x.png" /></div>
        <img class="x5_-elements_-navigation-bell-off" src="img/5-elements-navigation-bell-off-20@2x.png" />
        <div class="user-filled"><img class="group-17" src="img/group-17-1@2x.png" /></div>
      </div>
      <div class="home-indicators"></div>
    </div>
  </div>
</body>

</html>