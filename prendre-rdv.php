<?php

include "models/personne.class.php";
$personne = new personne("", "", "", "", "", "", "", "", "", "", "", "", "","");
$res_pers = $personne->detail($_REQUEST["pers"]);


?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
  <link rel="shortcut icon" type="image/png" href="https://animaproject.s3.amazonaws.com/home/favicon.png" />
  <meta name="og:type" content="website" />
  <meta name="twitter:card" content="photo" />
  <link rel="stylesheet" type="text/css" href="css/prendre-rdv.css" />
  <link rel="stylesheet" type="text/css" href="css/styleguide.css" />
  <link rel="stylesheet" type="text/css" href="css/globals.css" />
</head>

<body style="margin: 0; background: #ffffff">
  <input type="hidden" id="anPageName" name="page" value="prendre-rdv" />
  <div class="container-center-horizontal">
    <div class="prendre-rdv screen">
      <div class="overlap-group4">
        <div class="overlap-group2">
          <div class="rechercher-des-accompagnateurs roboto-bold-black-30px">
            <span class="roboto-bold-black-30px">Rechercher des <br />accompagnateurs</span>
          </div>

        </div>

      </div>
      <div class="flex-row">

        <div class="tous-les-accompagnateurs roboto-medium-black-16px">
          <span class="roboto-medium-black-16px">Tous les Accompagnateurs</span>
        </div>
      </div>
      <div class="flex-col">
        <div class="flex-row-1">
          <img class="avatars" src="img/<?php echo ($res_pers->image); ?>" />
          <div class="flex-col-1">
            <div class="philomena-tiret roboto-medium-black-20-1px">
              <span class="roboto-medium-black-20-1px"><?php echo ($res_pers->nom_prenom_pers); ?></span>
            </div>
            <div class="photographie roboto-normal-storm-dust-14-3px">
              <span class="roboto-normal-storm-dust-14-3px"><?php echo ($res_pers->domaine); ?></span>
            </div>
            <div class="flex-row-2">
              <a href="profilaccompagnateur.php?pers=<?php echo($res_pers->id); ?>">
                <div class="voir-le-profil roboto-medium-eerie-black-12px">
                  <span class="roboto-medium-eerie-black-12px">Voir le profil</span>
                </div>
              </a>
              <div class="contacter montserrat-medium-governor-bay-9-1px">
                <span class="montserrat-medium-governor-bay-9-1px">Contacter</span>
              </div>

            </div>
          </div>
        </div>
        <div class="flex-col-2">
          <p class="bonjour-moi-cest-p">
            <?php echo ($res_pers->bio); ?>
          </p>
          <div class="les-disponibilits-de-philomena roboto-bold-eerie-black-12px">
            <span class="roboto-bold-eerie-black-12px">Les disponibilités de Philomena</span>
          </div>
          <div class="rectangle-2612"></div>
          <div class="choisissez-un-jour-dinscription roboto-normal-oslo-gray-11px">
            <span class="roboto-normal-oslo-gray-11px">Choisissez un jour d’inscription</span>
          </div>
          <div class="frame-3316">
            <img class="vector-2-stroke" src="img/vector-2--stroke--17@2x.png" />
            <div class="dcembre roboto-normal-black-12-2px">
              <span class="roboto-normal-black-12-2px">Décembre</span>
            </div>
            <img class="vector-2-stroke-1" src="img/vector-2--stroke--18@2x.png" />
          </div>
          <div class="row inter-normal-zeus-7-9px">
            <div class="price valign-text-middle">
              <span><span class="inter-normal-zeus-7-9px">L</span> </span>
            </div>
            <div class="row-item valign-text-middle">
              <span><span class="inter-normal-zeus-7-9px">M</span> </span>
            </div>
            <div class="row-item valign-text-middle">
              <span><span class="inter-normal-zeus-7-9px">M</span> </span>
            </div>
            <div class="row-item valign-text-middle">
              <span><span class="inter-normal-zeus-7-9px">J</span> </span>
            </div>
            <div class="row-item valign-text-middle">
              <span><span class="inter-normal-zeus-7-9px">V</span> </span>
            </div>
            <div class="row-item valign-text-middle">
              <span><span class="inter-normal-zeus-7-9px">S</span> </span>
            </div>
            <div class="row-item valign-text-middle">
              <span><span class="inter-normal-zeus-7-9px">D</span> </span>
            </div>
          </div>
          <div class="overlap-group">
            <div class="date-default border-1px-bon-jour">
              <div class="number valign-text-middle roboto-normal-bon-jour-8-7px">
                <span><span class="roboto-normal-bon-jour-8-7px">1</span> </span>
              </div>
            </div>
            <div class="date-default-1 border-1px-bon-jour">
              <div class="x1 valign-text-middle roboto-normal-bon-jour-8-7px">
                <span><span class="roboto-normal-bon-jour-8-7px">2</span> </span>
              </div>
            </div>
            <div class="date-default-2 border-1px-bon-jour">
              <div class="x1-1 valign-text-middle roboto-normal-bon-jour-8-7px">
                <span><span class="roboto-normal-bon-jour-8-7px">3</span> </span>
              </div>
            </div>
            <div class="date-default-3 border-1px-bon-jour">
              <div class="x1-2 valign-text-middle roboto-normal-bon-jour-8-7px">
                <span><span class="roboto-normal-bon-jour-8-7px">4</span> </span>
              </div>
            </div>
            <div class="date-default-4 border-1px-bon-jour">
              <div class="x1-3 valign-text-middle roboto-normal-bon-jour-8-7px">
                <span><span class="roboto-normal-bon-jour-8-7px">5</span> </span>
              </div>
            </div>
            <div class="date-default-5 border-1px-silver-chalice">
              <div class="number-1 valign-text-middle roboto-normal-black-8-7px">
                <span><span class="roboto-normal-black-8-7px">1</span> </span>
              </div>
            </div>
            <div class="date-default-6">
              <div class="x1-4 valign-text-middle roboto-normal-white-8-7px">
                <span><span class="roboto-normal-white-8-7px">14</span> </span>
              </div>
            </div>
            <div class="date-default-7">
              <div class="x1-5 valign-text-middle roboto-normal-white-8-7px">
                <span><span class="roboto-normal-white-8-7px">21</span> </span>
              </div>
            </div>
            <div class="date-default-8">
              <div class="x1-6 valign-text-middle roboto-normal-white-8-7px">
                <span><span class="roboto-normal-white-8-7px">28</span> </span>
              </div>
            </div>
            <div class="date-default-9">
              <div class="x1-7 valign-text-middle roboto-normal-white-8-7px">
                <span><span class="roboto-normal-white-8-7px">2</span> </span>
              </div>
            </div>
            <div class="date-default-10">
              <div class="x1-8 valign-text-middle roboto-normal-white-8-7px">
                <span><span class="roboto-normal-white-8-7px">15</span> </span>
              </div>
            </div>
            <div class="date-default-11">
              <div class="x1-9 valign-text-middle roboto-normal-white-8-7px">
                <span><span class="roboto-normal-white-8-7px">8</span> </span>
              </div>
            </div>
            <div class="date-default-12">
              <div class="x1-10 valign-text-middle roboto-normal-white-8-7px">
                <span><span class="roboto-normal-white-8-7px">22</span> </span>
              </div>
            </div>
            <div class="date-default-13 border-1px-silver-chalice">
              <div class="x1-11 valign-text-middle roboto-normal-black-8-7px">
                <span><span class="roboto-normal-black-8-7px">29</span> </span>
              </div>
            </div>
            <div class="date-default-14">
              <div class="x1-12 valign-text-middle roboto-normal-white-8-7px">
                <span><span class="roboto-normal-white-8-7px">3</span> </span>
              </div>
            </div>
            <div class="date-default-15 border-1px-silver-chalice">
              <div class="x1-13 valign-text-middle roboto-normal-black-8-7px">
                <span><span class="roboto-normal-black-8-7px">16</span> </span>
              </div>
            </div>
            <div class="date-default-16">
              <div class="x1-14 valign-text-middle roboto-normal-white-8-7px">
                <span><span class="roboto-normal-white-8-7px">9</span> </span>
              </div>
            </div>
            <div class="date-default-17 border-1px-silver-chalice">
              <div class="x1-15 valign-text-middle roboto-normal-black-8-7px">
                <span><span class="roboto-normal-black-8-7px">23</span> </span>
              </div>
            </div>
            <div class="date-default-18">
              <div class="x1-16 valign-text-middle roboto-normal-white-8-7px">
                <span><span class="roboto-normal-white-8-7px">30</span> </span>
              </div>
            </div>
            <div class="date-default-19 border-1px-silver-chalice">
              <div class="x1-17 valign-text-middle roboto-normal-black-8-7px">
                <span><span class="roboto-normal-black-8-7px">4</span> </span>
              </div>
            </div>
            <div class="date-default-20">
              <div class="x1-18 valign-text-middle roboto-normal-white-8-7px">
                <span><span class="roboto-normal-white-8-7px">17</span> </span>
              </div>
            </div>
            <div class="date-default-21">
              <div class="x1-19 valign-text-middle roboto-normal-white-8-7px">
                <span><span class="roboto-normal-white-8-7px">10</span> </span>
              </div>
            </div>
            <div class="date-default-22 border-1px-silver-chalice">
              <div class="x1-20 valign-text-middle roboto-normal-black-8-7px">
                <span><span class="roboto-normal-black-8-7px">24</span> </span>
              </div>
            </div>
            <div class="date-default-23 border-1px-silver-chalice">
              <div class="x1-21 valign-text-middle roboto-normal-black-8-7px">
                <span><span class="roboto-normal-black-8-7px">5</span> </span>
              </div>
            </div>
            <div class="date-default-24 border-1px-silver-chalice">
              <div class="x1-22 valign-text-middle roboto-normal-black-8-7px">
                <span><span class="roboto-normal-black-8-7px">18</span> </span>
              </div>
            </div>
            <div class="date-default-25">
              <div class="x1-23 valign-text-middle roboto-normal-white-8-7px">
                <span><span class="roboto-normal-white-8-7px">11</span> </span>
              </div>
            </div>
            <div class="date-default-26">
              <div class="x1-24 valign-text-middle roboto-normal-white-8-7px">
                <span><span class="roboto-normal-white-8-7px">25</span> </span>
              </div>
            </div>
            <div class="date-default-27">
              <div class="x1-25 valign-text-middle roboto-normal-white-8-7px">
                <span><span class="roboto-normal-white-8-7px">6</span> </span>
              </div>
            </div>
            <div class="date-default-28">
              <div class="x1-26 valign-text-middle roboto-normal-white-8-7px">
                <span><span class="roboto-normal-white-8-7px">19</span> </span>
              </div>
            </div>
            <div class="date-default-29 border-1px-silver-chalice">
              <div class="x1-27 valign-text-middle roboto-normal-black-8-7px">
                <span><span class="roboto-normal-black-8-7px">12</span> </span>
              </div>
            </div>
            <div class="date-default-30 border-1px-silver-chalice">
              <div class="x1-28 valign-text-middle roboto-normal-black-8-7px">
                <span><span class="roboto-normal-black-8-7px">26</span> </span>
              </div>
            </div>
            <div class="date-default-31">
              <div class="x1-29 valign-text-middle roboto-normal-white-8-7px">
                <span><span class="roboto-normal-white-8-7px">7</span> </span>
              </div>
            </div>
            <div class="date-default-32">
              <div class="x1-30 valign-text-middle roboto-normal-white-8-7px">
                <span><span class="roboto-normal-white-8-7px">20</span> </span>
              </div>
            </div>
            <div class="date-default-33">
              <div class="x1-31 valign-text-middle roboto-normal-white-8-7px">
                <span><span class="roboto-normal-white-8-7px">13</span> </span>
              </div>
            </div>
            <div class="date-default-34">
              <div class="x1-32 valign-text-middle roboto-normal-white-8-7px">
                <span><span class="roboto-normal-white-8-7px">27</span> </span>
              </div>
            </div>
            <div class="tooltip">
              <div class="prendre-rdv-1 valign-text-middle">
                <span><span>Prendre RDV</span> </span>
              </div>
              <img class="vector-14" src="img/vector-14-3@2x.png" />
            </div>
          </div>
        </div>
      </div>
      <div class="overlap-group3">
        <div class="frame-3314">
          <img class="x5_-elements_-navigation-home-on" src="img/5-elements-navigation-home-on-20@2x.png" />
          <div class="overlap-group-1"><img class="subtract" src="img/subtract-10@2x.png" /></div>
          <div class="x5_-elements_-navigation-message-off"><img class="shape" src="img/shape-18@2x.png" /></div>
          <img class="x5_-elements_-navigation-bell-off" src="img/5-elements-navigation-bell-off-20@2x.png" />
          <div class="user-filled"><img class="group-18" src="img/group-18-19@2x.png" /></div>
        </div>
        <div class="home-indicators"></div>
      </div>
    </div>
  </div>
</body>

</html>