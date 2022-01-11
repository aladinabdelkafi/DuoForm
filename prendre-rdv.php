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
  <link rel="stylesheet" type="text/css" href="https://www.jqueryscript.net/demo/Beautiful-Multifunctional-Calendar-Plugin-For-jQuery-PIGNOSE-Calender/demo/css/calender-style.css" />
	<link rel="stylesheet" type="text/css" href="https://www.jqueryscript.net/demo/Beautiful-Multifunctional-Calendar-Plugin-For-jQuery-PIGNOSE-Calender/src/css/pignose.calender.css" />
  <script src="https://netdna.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.12.0/moment.min.js"></script>
	<script type="text/javascript" src="https://www.jqueryscript.net/demo/Beautiful-Multifunctional-Calendar-Plugin-For-jQuery-PIGNOSE-Calender/src/js/pignose.calender.js"></script>
  <script type="text/javascript">
	//<![CDATA[
	$(function() {
		$('.calender').pignoseCalender({
			select: function(date, obj) {
				obj.calender.parent().next().show().text('You selected ' + 
				(date[0] === null? 'null':date[0].format('YYYY-MM-DD')) +
				'.');
			}
		});

		$('.multi-select-calender').pignoseCalender({
			multiple: true,
			select: function(date, obj) {
				obj.calender.parent().next().show().text('You selected ' + 
					(date[0] === null? 'null':date[0].format('YYYY-MM-DD')) +
					'~' +
					(date[1] === null? 'null':date[1].format('YYYY-MM-DD')) +
					'.');
			}
		});

		$('.toggle-calender').pignoseCalender({
			toggle: true,
			select: function(date, obj) {
				var $target = obj.calender.parent().next().show().html('You selected ' + 
				(date[0] === null? 'null':date[0].format('YYYY-MM-DD')) + 
				'.' +
				'<br /><br />' +
				'<strong>Active dates</strong><br /><br />' +
				'<div class="active-dates"></div>');

				for(var idx in obj.activeDates) {
					var date = obj.activeDates[idx];
					if(typeof date !== 'string') {
						continue;
					}
					$target.find('.active-dates').append('<span class="label label-default">' + date + '</span>');
				}
			}
		});
		
		$('.language-calender').each(function() {
			var $this = $(this);
			var lang = $this.data('lang');
			$this.pignoseCalender({
				lang: lang
			});
		});
	});
	//]]>
	</script>
  <style>
    #step2{display:none}
    .card p {
      margin: 20px 30px;
    /* padding: 20px; */
    width: 80%;
    /* float: right; */
    right: 0;
    }
    .card img {
      float: left;
    padding: 10px;
    }
    .card {
      margin-top:30px;
      background: #7970e4;
    padding: 10px 20px;    height: 100px;
    border-radius: 20px;
    color: #FFF;
    }
    .prendre-rdv  {
      height: 100%;
    }
  </style>
  <link href="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet"/>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="http://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>
<script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
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


     <iframe style="min-height: 570px;" scrolling="no" height="570px" width="100%" src="calendar.php?pers=<?php echo $res_pers->id;?>" frameborder="0"></iframe>

</div>
      
      <div class="overlap-group3">
        <div class="frame-3314">
          <a href="index.php"><img class="x5_-elements_-navigation-home-on" src="img/5-elements-navigation-home-on-20@2x.png" /></a>
          <a href="explorer.php">
            <div class="overlap-group-1"><img class="subtract" src="img/subtract-10@2x.png" /></div>
          </a>
          <a href="messagerie.php">
            <div class="x5_-elements_-navigation-message-off"><img class="shape" src="img/shape-18@2x.png" /></div>
          </a>
          <a href="planning.php"><img class="x5_-elements_-navigation-bell-off" src="img/5-elements-navigation-bell-off-20@2x.png" /></a>
          <a href="profil.php">
            <div class="x5_-elements_-navigation-message-off"><img class="group-18" src="img/group-18-19@2x.png" /></div>
          </a>
        </div>
      </div>
    </div>
    
<button style="display:none" id="btnModal" type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">
    Launch demo modal
</button>

<div class="modal fade  come-from-modal right" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" style="height:100%">
    <div class="modal-dialog" role="document" style="height:100%">
        <div class="modal-content" style="background: #372ad1;height: 100%">
        
            <div class="modal-body" >
    <div id="step1" style="  margin-top: 50%;
    margin-left: 40%;">
                <img src="img/check.png" alt="">
                <div style="    margin-left: -150px;
    color: #FFF;
    text-align: center;
    font-weight: bolder;">
                <h2>Demande Envoyée</h2>
                <p>Eric vous répondera dès que possible</p>
                </div>
            </div>
            </div>
            <div id="step2" style="padding: 0 20px">
              <h1 style="color:#FFF">Règles Covid</h1>

              <div  style="    margin-top: 70px;">
                <div class="card">
                  <img src="img/covid1.png" alt="">
                  <p>Si vous êtes positif le rendez vous sera annulé</p>
                </div>
                <div class="card">
                  <img src="img/covid2.png" alt="">
                  <p>Port du masque obligatoire</p>
                </div>
                <div class="card">
                  <img src="img/covid3.png" alt="">
                  <p>Lavez vous les mains</p>
                </div>
                <div class="card">
                  <img src="img/covid4.png" alt="">
                  <p>Après chaque rendez-vous désinfectez les tables</p>
                </div>
              </div>
            </div>
        </div>
    </div>
</div>
  </div>
  
</body>

</html>