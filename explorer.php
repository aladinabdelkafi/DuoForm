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
    
    <style>
      .btnSearch {
        background-color: #372ad1 !important;
        border-radius:30px !important;
      }
      .modal-content {
        background-color: #f7f6fd;
      }
      .come-from-modal.left .modal-dialog, .come-from-modal.right .modal-dialog {
        width: 100% !important;
      }
      #suggestions {
        margin: 10px 30px;
      }
      .come-from-modal.left .modal-dialog,
.come-from-modal.right .modal-dialog {
    position: fixed;
    margin: auto;
    width: 100%;
    height: 100%;
    -webkit-transform: translate3d(0%, 0, 0);
    -ms-transform: translate3d(0%, 0, 0);
    -o-transform: translate3d(0%, 0, 0);
    transform: translate3d(0%, 0, 0);
}

.come-from-modal.left .modal-content,
.come-from-modal.right .modal-content {
    height: 100%;
    overflow-y: auto;
    border-radius: 0px;
}

.come-from-modal.left .modal-body,
.come-from-modal.right .modal-body {
    padding: 15px 15px 80px;
}
.come-from-modal.right.fade .modal-dialog {
    right: -520px;
    -webkit-transition: opacity 0.3s linear, right 0.3s ease-out;
    -moz-transition: opacity 0.3s linear, right 0.3s ease-out;
    -o-transition: opacity 0.3s linear, right 0.3s ease-out;
    transition: opacity 0.3s linear, right 0.3s ease-out;
}

.come-from-modal.right.fade.in .modal-dialog {
    right: 0;
}
.searchInput {
  border: 0;
  align-items: flex-end;
    background-color: var(--desert-storm);
    border-radius: 5px;
    display: flex;
    height: 40px;
    min-width: 293px;
    padding: 9.1px 13px;
}


.input {
  border: 0;
    align-items: flex-end;
    background-color: #FFF;
    border-radius: 5px;
    display: flex;
    border-radius: 10px;
    height: 60px;
    min-width: 353px;
    margin: 10px 0px;
    padding: 9.1px 13px;
}
      </style>
  
    <style>
      #suggestions {
        margin: 10px 30px;
      }
      .come-from-modal.left .modal-dialog,
.come-from-modal.right .modal-dialog {
    position: fixed;
    margin: auto;
    width: 320px;
    height: 100%;
    -webkit-transform: translate3d(0%, 0, 0);
    -ms-transform: translate3d(0%, 0, 0);
    -o-transform: translate3d(0%, 0, 0);
    transform: translate3d(0%, 0, 0);
}

.come-from-modal.left .modal-content,
.come-from-modal.right .modal-content {
    height: 100%;
    overflow-y: auto;
    border-radius: 0px;
}

.come-from-modal.left .modal-body,
.come-from-modal.right .modal-body {
    padding: 15px 15px 80px;
}
.come-from-modal.right.fade .modal-dialog {
    right: -520px;
    -webkit-transition: opacity 0.3s linear, right 0.3s ease-out;
    -moz-transition: opacity 0.3s linear, right 0.3s ease-out;
    -o-transition: opacity 0.3s linear, right 0.3s ease-out;
    transition: opacity 0.3s linear, right 0.3s ease-out;
}

.come-from-modal.right.fade.in .modal-dialog {
    right: 0;
}
.searchInput {
  border: 0;
  align-items: flex-end;
    background-color: var(--desert-storm);
    border-radius: 5px;
    display: flex;
    height: 40px;
    min-width: 293px;
    padding: 9.1px 13px;
}
      </style>
  
  </head>
  <body style="margin: 0; background: #ffffff">
    <input type="hidden" id="anPageName" name="page" value="explorer" />
    <div class="container-center-horizontal">
      <div class="explorer screen">
        <div class="overlap-group5">
          <div class="overlap-group4">
            <div class="rechercher-des-accompagnateurs roboto-bold-black-30px">
              <span class="roboto-bold-black-30px" style="font-size:20px">Rechercher des accompagnateurs</span>
            </div>
          
          </div>
          <div class="love"><img class="oval" src="img/oval-3@2x.png" /></div>
        </div>
        <p class="il-y-a-plus-de-3912 roboto-normal-gunsmoke-15px">
          <span class="roboto-normal-gunsmoke-15px">Il y a plus de 3912 accompagnateurs sur Duo Form !</span>
        </p>
        <div class="search-box">
          
          <input class="searchInput" id="search"  type="text" placeholder="Rechercher" />
          <div class="overlap-group1" data-toggle="modal" data-target="#myModal"><img class="shape" src="img/shape-15@2x.png" /></div>
        </div>
        <div id="suggestions" style="width: 300px">
		
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
          <div class="card">
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
  
        </div>
        <div class="vos-recommandations roboto-medium-black-16px">
          <span class="roboto-medium-black-16px">Vos recommandations</span>
        </div>
        <div class="overlap-group3">
          <div class="frame-3314">
          <a href="index.php"><img class="x5_-elements_-navigation-home-on" src="img/5-elements-navigation-home-on-20@2x.png" /></a>
          <a href="explorer.php">
            <div class="overlap-group-2"><img class="subtract" src="img/subtract-10@2x.png" /></div>
          </a>
          <a href="messagerie.php">
            <div class="x5_-elements_-navigation-message-off"><img class="shape" src="img/shape-18@2x.png" /></div>
          </a>
          <a href="planning.php"><img class="x5_-elements_-navigation-bell-off" src="img/5-elements-navigation-bell-off-20@2x.png" /></a>
          <a href="profil.php">
            <div class="user-filled"><img class="group-18" src="img/group-18-19@2x.png" /></div>
          </a>
        </div>


        </div>
      </div>
    </div>



    <link href="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet"/>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="http://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>
<script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>

<div class="modal fade  come-from-modal right" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Filtres</h4>
            </div>
            <div class="modal-body">
            <input class="input" id="input1"  type="text" placeholder="Type d'accompagnement" />
            <input class="input" id="input1"  type="text" placeholder="Sur place, en visio" />

            <input class="input" id="input1"  type="text" placeholder="Autour de moi" />

            <input class="input" id="input1"  type="text" placeholder="Lundi 10 Janvier" />
            <input class="input" id="input1"  type="text" placeholder="Mercredi 12 Janvier" />

            <select class="input" id="input1">
              <option>Domaine d'activité</option>
</select>


            </div>
            <div class="modal-footer">
                <a data-dismiss="modal">Réinitialiser</a>
                <button  type="button" class="btn btn-primary btnSearch">Rechercher</button>
            </div>
        </div>
    </div>
</div> 
<script>

<script>
$(document).ready(function(){
    // when any character press on the input field keyup function call
    $("#search").keyup(function(){
        $.ajax({
        type: "POST", // here used post method
        url: "api/fetchPersonnes.php?role=Professionel",//php file where retrive the post value and fetch all the matched item from database
        data:'searchterm='+$(this).val(),//send data or search term to readname file to process
        beforeSend: function(){
            // show loader icon
            $("#searchword").css("background","#FFF url(LoaderIcon.gif) no-repeat 175px");
        },
        success: function(data){
            // get the output from database on success
            $("#suggestions").show();//show the suggestions
            $("#suggestions").html(data);//append data in the box for selection
            $("#searchword").css("background","#FFF");
        }
        });
    });
});
// call this function after select one of these suggestion for hide the suggestion box and select the value
function selectname(selected_value) {
	$("#searchword").val(selected_value);
	$("#suggestions").hide();
}
</script>

  </body>
</html>
