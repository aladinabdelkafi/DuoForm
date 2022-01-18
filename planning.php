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
  <link rel="stylesheet" type="text/css" href="css/planning.css" />
  <link rel="stylesheet" type="text/css" href="css/styleguide.css" />
  <link rel="stylesheet" type="text/css" href="css/globals.css" />
</head>

<body style="margin: 0; background: #ffffff">
  <input type="hidden" id="anPageName" name="page" value="planning" />
  <div class="container-center-horizontal">
    <div class="planning screen">

      <div class="planning-1 roboto-bold-black-30px"><span class="roboto-bold-black-30px">Planning</span></div>
      <p class="cest-un-beau-jour-p roboto-normal-gunsmoke-15px-2">
        <span class="roboto-normal-gunsmoke-15px-2">C’est un beau jour pour apprendre de nouvelles choses !</span>
      </p>
      <div class="rendez-vous-venir roboto-medium-black-16px">
        <span class="roboto-medium-black-16px">Rendez-vous à venir...</span>
      </div>
      <div class="overlap-group-container">


        <?php
        include "models/meeting.class.php";
        $meeting = new meeting("", "", "", "", "", "");
        $res_meeting = $meeting->listeNexMeeingEtudiant($_SESSION['personne']->id);
        if (empty($res_meeting)) {
        ?>
          <div class="flex-col">
            <div class="flex-row">
              <div class="flex-col-1">
                <div class="philomena-tiret roboto-medium-black-14px">
                  <span class="roboto-medium-black-14px">Vous n'avez pas encore de rendez-vous </span>
                </div>
              </div>
            </div>
          </div>

          <?php
        } else {
          include "models/personne.class.php";
          foreach ($res_meeting as $row) {
            $personne = new personne("", "", "", "", "", "", "", "", "", "", "", "", "","");
            $res_personne = $personne->detail($row->accompagnateur);
          ?>
            <div class="flex-col">
              <div class="flex-row">
                <img class="avatars" src="img/<?php echo ($res_personne->image); ?>" />
                <div class="flex-col-1">
                  <div class="philomena-tiret roboto-medium-black-14px">
                    <span class="roboto-medium-black-14px"><?php echo ($res_personne->nom_prenom_pers); ?></span>
                  </div>
                  <div class="photographie roboto-normal-oslo-gray-10px">
                    <span class="roboto-normal-oslo-gray-10px"><?php echo ($res_personne->domaine); ?></span>
                  </div>
                </div>
              </div>
              <div class="flex-row-1">
                <div class="overlap-group">
                  <div class="vendredi-1 roboto-medium-oslo-gray-12px">
                    <span class="roboto-medium-oslo-gray-12px"><?php echo (substr($row->date, 0, 10)); ?></span>
                  </div>
                </div>
                <div class="overlap-group-1">
                  <div class="x15h30 roboto-medium-oslo-gray-12px">
                    <span class="roboto-medium-oslo-gray-12px"><?php echo (substr($row->date, 11, -3)); ?></span>
                  </div>
                </div>
                <a href="messagerie-2.php">
                  <div class="contacter roboto-normal-oslo-gray-12px">
                    <span class="roboto-normal-oslo-gray-12px">Contacter</span>
                  </div>
                </a>
              </div>
            </div>
        <?php }
        } ?>
      </div>


      <div class="overlap-group5">
        <a href="explorer.php">
          <div class="btn">
            <div class="sinscrire roboto-medium-white-12-8px">
              <span class="roboto-medium-white-12-8px">Nouveau rendez-vous</span>
            </div>
          </div>
        </a>
      </div>


      <div class="chercher-un-accompagnateur roboto-bold-governor-bay-13px">
        <span class="roboto-bold-governor-bay-13px">Chercher un accompagnateur</span>
      </div>
      <div class="rectangle-2601"></div>
      <div class="calendrier roboto-medium-black-16px"><span class="roboto-medium-black-16px">Calendrier</span></div>
      <div class="frame-3315">
        <img class="vector-2-stroke" src="img/vector-2--stroke--7@2x.png" />
        <div class="dcembre roboto-normal-black-14px"><span class="roboto-normal-black-14px">Décembre</span></div>
        <img class="vector-2-stroke-1" src="img/vector-2--stroke--8@2x.png" />
      </div>
      <div class="row inter-normal-zeus-9px">
        <div class="price valign-text-middle">
          <span><span class="inter-normal-zeus-9px">L</span> </span>
        </div>
        <div class="row-item valign-text-middle">
          <span><span class="inter-normal-zeus-9px">M</span> </span>
        </div>
        <div class="row-item valign-text-middle">
          <span><span class="inter-normal-zeus-9px">M</span> </span>
        </div>
        <div class="row-item valign-text-middle">
          <span><span class="inter-normal-zeus-9px">J</span> </span>
        </div>
        <div class="row-item valign-text-middle">
          <span><span class="inter-normal-zeus-9px">V</span> </span>
        </div>
        <div class="row-item valign-text-middle">
          <span><span class="inter-normal-zeus-9px">S</span> </span>
        </div>
        <div class="row-item valign-text-middle">
          <span><span class="inter-normal-zeus-9px">D</span> </span>
        </div>
      </div>
      <div class="group-16">
        <div class="date-default-container">
          <div class="date-default border-1px-bon-jour">
            <div class="number valign-text-middle roboto-normal-bon-jour-10px">
              <span><span class="roboto-normal-bon-jour-10px">1</span> </span>
            </div>
          </div>
          <div class="date-default-1 border-1px-bon-jour">
            <div class="x1 valign-text-middle roboto-normal-bon-jour-10px">
              <span><span class="roboto-normal-bon-jour-10px">2</span> </span>
            </div>
          </div>
          <div class="date-default-2 border-1px-bon-jour">
            <div class="x1-1 valign-text-middle roboto-normal-bon-jour-10px">
              <span><span class="roboto-normal-bon-jour-10px">3</span> </span>
            </div>
          </div>
          <div class="date-default-3 border-1px-bon-jour">
            <div class="x1-2 valign-text-middle roboto-normal-bon-jour-10px">
              <span><span class="roboto-normal-bon-jour-10px">4</span> </span>
            </div>
          </div>
          <div class="date-default-4 border-1px-bon-jour">
            <div class="x1-3 valign-text-middle roboto-normal-bon-jour-10px">
              <span><span class="roboto-normal-bon-jour-10px">5</span> </span>
            </div>
          </div>
          <div class="date-default-5 border-1px-silver-chalice">
            <div class="number-1 valign-text-middle roboto-normal-black-10px">
              <span><span class="roboto-normal-black-10px">1</span> </span>
            </div>
          </div>
          <div class="date-default-6 border-1px-silver-chalice">
            <div class="x1-4 valign-text-middle roboto-normal-black-10px">
              <span><span class="roboto-normal-black-10px">14</span> </span>
            </div>
          </div>
          <div class="date-default-7 border-1px-silver-chalice">
            <div class="x1-5 valign-text-middle roboto-normal-black-10px">
              <span><span class="roboto-normal-black-10px">21</span> </span>
            </div>
          </div>
          <div class="date-default-8 border-1px-silver-chalice">
            <div class="x1-6 valign-text-middle roboto-normal-black-10px">
              <span><span class="roboto-normal-black-10px">28</span> </span>
            </div>
          </div>
          <div class="date-default-9 border-1px-silver-chalice">
            <div class="x1-7 valign-text-middle roboto-normal-black-10px">
              <span><span class="roboto-normal-black-10px">2</span> </span>
            </div>
          </div>
          <div class="date-default-10 border-1px-silver-chalice">
            <div class="x1-8 valign-text-middle roboto-bold-white-10px">
              <span><span class="roboto-bold-white-10px">15</span> </span>
            </div>
          </div>
          <div class="date-default-11 border-1px-silver-chalice">
            <div class="x1-9 valign-text-middle roboto-normal-black-10px">
              <span><span class="roboto-normal-black-10px">8</span> </span>
            </div>
          </div>
          <div class="date-default-12 border-1px-silver-chalice">
            <div class="x1-10 valign-text-middle roboto-normal-black-10px">
              <span><span class="roboto-normal-black-10px">22</span> </span>
            </div>
          </div>
          <div class="date-default-13 border-1px-silver-chalice">
            <div class="x1-11 valign-text-middle roboto-normal-black-10px">
              <span><span class="roboto-normal-black-10px">29</span> </span>
            </div>
          </div>
          <div class="date-default-14 border-1px-silver-chalice">
            <div class="x1-12 valign-text-middle roboto-normal-black-10px">
              <span><span class="roboto-normal-black-10px">3</span> </span>
            </div>
          </div>
          <div class="date-default-15 border-1px-silver-chalice">
            <div class="x1-13 valign-text-middle roboto-normal-black-10px">
              <span><span class="roboto-normal-black-10px">16</span> </span>
            </div>
          </div>
          <div class="date-default-16 border-1px-silver-chalice">
            <div class="x1-14 valign-text-middle roboto-normal-black-10px">
              <span><span class="roboto-normal-black-10px">9</span> </span>
            </div>
          </div>
          <div class="date-default-17 border-1px-silver-chalice">
            <div class="x1-15 valign-text-middle roboto-normal-black-10px">
              <span><span class="roboto-normal-black-10px">23</span> </span>
            </div>
          </div>
          <div class="date-default-18 border-1px-silver-chalice">
            <div class="x1-16 valign-text-middle roboto-normal-black-10px">
              <span><span class="roboto-normal-black-10px">30</span> </span>
            </div>
          </div>
          <div class="date-default-19 border-1px-silver-chalice">
            <div class="x1-17 valign-text-middle roboto-normal-black-10px">
              <span><span class="roboto-normal-black-10px">4</span> </span>
            </div>
          </div>
          <div class="date-default-20 border-1px-silver-chalice">
            <div class="x1-18 valign-text-middle roboto-normal-black-10px">
              <span><span class="roboto-normal-black-10px">17</span> </span>
            </div>
          </div>
          <div class="date-default-21 border-1px-silver-chalice">
            <div class="x1-19 valign-text-middle roboto-normal-black-10px">
              <span><span class="roboto-normal-black-10px">10</span> </span>
            </div>
          </div>
          <div class="date-default-22 border-1px-silver-chalice">
            <div class="x1-20 valign-text-middle roboto-normal-black-10px">
              <span><span class="roboto-normal-black-10px">24</span> </span>
            </div>
          </div>
          <div class="date-default-23 border-1px-silver-chalice">
            <div class="x1-21 valign-text-middle roboto-normal-black-10px">
              <span><span class="roboto-normal-black-10px">5</span> </span>
            </div>
          </div>
          <div class="date-default-24 border-1px-silver-chalice">
            <div class="x1-22 valign-text-middle roboto-normal-black-10px">
              <span><span class="roboto-normal-black-10px">18</span> </span>
            </div>
          </div>
          <div class="date-default-25 border-1px-silver-chalice">
            <div class="x1-23 valign-text-middle roboto-normal-black-10px">
              <span><span class="roboto-normal-black-10px">11</span> </span>
            </div>
          </div>
          <div class="date-default-26 border-1px-silver-chalice">
            <div class="x1-24 valign-text-middle roboto-normal-black-10px">
              <span><span class="roboto-normal-black-10px">25</span> </span>
            </div>
          </div>
          <div class="date-default-27 border-1px-silver-chalice">
            <div class="x1-25 valign-text-middle roboto-normal-black-10px">
              <span><span class="roboto-normal-black-10px">6</span> </span>
            </div>
          </div>
          <div class="date-default-28 border-1px-silver-chalice">
            <div class="x1-26 valign-text-middle roboto-normal-black-10px">
              <span><span class="roboto-normal-black-10px">19</span> </span>
            </div>
          </div>
          <div class="date-default-29 border-1px-silver-chalice">
            <div class="x1-27 valign-text-middle roboto-bold-white-10px">
              <span><span class="roboto-bold-white-10px">12</span> </span>
            </div>
          </div>
          <div class="date-default-30 border-1px-silver-chalice">
            <div class="x1-28 valign-text-middle roboto-normal-black-10px">
              <span><span class="roboto-normal-black-10px">26</span> </span>
            </div>
          </div>
          <div class="date-default-31 border-1px-silver-chalice">
            <div class="x1-29 valign-text-middle roboto-normal-black-10px">
              <span><span class="roboto-normal-black-10px">7</span> </span>
            </div>
          </div>
          <div class="date-default-32 border-1px-silver-chalice">
            <div class="x1-30 valign-text-middle roboto-normal-black-10px">
              <span><span class="roboto-normal-black-10px">20</span> </span>
            </div>
          </div>
          <div class="date-default-33 border-1px-silver-chalice">
            <div class="x1-31 valign-text-middle roboto-normal-black-10px">
              <span><span class="roboto-normal-black-10px">13</span> </span>
            </div>
          </div>
          <div class="date-default-34 border-1px-silver-chalice">
            <div class="x1-32 valign-text-middle roboto-normal-black-10px">
              <span><span class="roboto-normal-black-10px">27</span> </span>
            </div>
          </div>
        </div>
      </div>
      <div class="overlap-group3">
      <div class="frame-3314">
        <a href="index.php">
          <img class="x5_-elements_-navigation-home-on" src="img/5-elements-navigation-home-on-20@2x.png" /></a>
        <a href="explorer.php">
          <div class="x5_-elements_-navigation-message-off"><img class="subtract" src="img/subtract-11@2x.png" /></div>
        </a>
        <a href="messagerie.php">
          <div class="x5_-elements_-navigation-message-off"><img class="shape" src="img/shape-18@2x.png" /></div>
        </a>
        <a href="planning.php">
          <img class="x5_-elements_-navigation-bell-off" src="img/5-elements-navigation-bell-off-6@2x.png" /></a>
        <a href="profil.php">
          <div class="user-filled"><img class="group-18" src="img/group-18-19@2x.png" /></div>
        </a>
      </div>
      </div>
    </div>
  </div>
</body>

</html>