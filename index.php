<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <link rel="icon" href="favicon.ico" />
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
    <link type="text/css" rel="stylesheet" href="css/style.css"/>
    <link type="text/css" rel="stylesheet" href="css/animate.css"/>
    <link type="text/css" rel="stylesheet" href="css/hover.css" media="all">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title></title>
  </head>

  <body>

    <nav>
   <div class="grey darken-4 nav-wrapper">
     <a href="#!" class="brand-logo">MA-SERIE.COM</a>
     <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
     <ul class="right hide-on-med-and-down">
       <a class="red darken-2 waves-effect waves-light btn-large hvr-buzz">Commencer le test</a>
     </ul>
     <ul class="side-nav" id="mobile-demo">
       <li><a href="index.php">Home</a></li>
       <li><a href="test.php">Test</a></li>
     </ul>
   </div>
 </nav>

  <video id="daredevil" autoplay  poster="img/img_daredevil.jpg" id="bgvid" loop>
  <source src="video/daredevil.mp4" type="video/mp4">
  </video>

  <div id="mute-btn" class="video-controls btn-floating btn-large red  darken-2 animated fadeInRight"><i class="material-icons">volume_up</i></div>
  <div id="unmute-btn" class="video-controls btn-floating btn-large red  darken-2 animated fadeInRight"><i class="material-icons">volume_off</i></div>



    <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script type="text/javascript" src="js/materialize.min.js"></script>
    <script type="text/javascript" src="js/materialize.js"></script>
    <script>
      $( document ).ready(function(){
        $(".button-collapse").sideNav();
      })
    </script>

  </body>
</html>
