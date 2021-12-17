<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
    <link rel="shortcut icon" type="image/png" href="https://animaproject.s3.amazonaws.com/home/favicon.png" />
    <meta name="og:type" content="website" />
    <meta name="twitter:card" content="photo" />
    <link rel="stylesheet" type="text/css" href="css/welcome-page2.css" />
    <link rel="stylesheet" type="text/css" href="css/styleguide.css" />
    <link rel="stylesheet" type="text/css" href="css/globals.css" />
  </head>
  <body style="margin: 0; background: #ffffff" id="body">
    <input type="hidden" id="anPageName" name="page" value="welcome-page2" />
    <div class="container-center-horizontal">
      <div class="welcome-page2 screen">
        <img class="group-14" src="img/group-14-1@2x.png" />
        <img class="progress-bar" src="img/progress-bar-1@2x.png" />
        <div class="home-indicators"></div>
      </div>
    </div>
  </body>
</html>

<script type="text/javascript">
    document.getElementById("body").onclick = function () {
        location.href = "welcome-page.php";
    };
</script>