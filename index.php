<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="content-type" content="text/html; charset=utf-8"/>
    <link rel="icon" href="favicon.ico"/>
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="css/materialize.min.css" media="screen"/>
    <link type="text/css" rel="stylesheet" href="css/style.css"/>
    <link type="text/css" rel="stylesheet" href="css/animate.css"/>
    <link type="text/css" rel="stylesheet" href="css/hover.css" media="all">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

    <script src="js/jquery-1.12.3.min.js"></script>
    <script src="lib/could9carousel/jquery.cloud9carousel.js"></script>
    <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script type="text/javascript" src="js/materialize.min.js"></script>
    <script type="text/javascript" src="js/materialize.js"></script>
    <script type="text/javascript" src="js/script.js"></script>
    <title>Series&Movies</title>
</head>


    <body>
        <nav>
            <div class="nav-wrapper">
                <a href="http://lucaspozzer.com" class="brand-logo">Series&Movies</a>
                <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
                <ul class="side-nav" id="mobile-demo"></ul>
            </div>
        </nav>
        <div id="test">
            <div class="titre">Trouve ton film ou ta série !</div>

            <form action="results.php" method="post">
                <div class="input-field marge">
                  <div class="blanc">
                    <select name="select">
                        <option value="0" disabled selected>   Genre</option>
                        <option value="28">  Action</option>
                        <option value="12">  Adventure</option>
                        <option value="16">  Animation</option>
                        <option value="35">  Comedy</option>
                        <option value="80">  Crime</option>
                        <!-- <option value="99">Documentary</option> -->
                        <option value="18">  Drama</option>
                        <option value="10751">  Family</option>
                        <option value="14">  Fantasy</option>
                        <option value="10769">  Foreign</option>
                        <option value="36">  History</option>
                        <option value="27">  Horror</option>
                        <option value="10402">  Music</option>
                        <option value="9648">  Mystery</option>
                        <option value="10749">  Romance</option>
                        <option value="878">  Science Fiction</option>
                        <option value="10770">  TV Movie</option>
                        <option value="53">  Thriller</option>
                        <option value="10752">  War</option>
                        <option value="37">  Western</option>
                    </select>
                  </div>

                  <div class="blanc">
                    <select name="annee">
                        <option value="0" disabled selected>   Annee</option>
                        <option value="2016">  2016</option>
                        <option value="2015">  2015</option>
                        <option value="2014">  2014</option>
                    </select>
                  </div>

                    <button class="btn waves-effect waves-light blue darken-2" id="submitButton" type="submit" name="action" value="submit">Chercher</button>
                </div>
            </form>


            <div class= "faded">
            <div id="headerMrS">
              <?php
              include("./php/request2.php");
              for ($i=0; $i<15; $i++){
                // si pas d'image alors ne saffiche pas
                if (preg_match("#jpg#", $json->results[$i]->poster_path)) {
                  echo '<div class="sorties header '  .$i.  '">
                Prochaines sorties
              		<div class="header-content">
                  <img src="http://image.tmdb.org/t/p/w500'.$json->results[$i]->poster_path.'" alt="">
              		</div>
                </div>';}}
              ?>
            </div>
          </div>

          <div class= "faded2">
          <div id="headerMrS2">
            <?php
            include("./php/request3.php");
            for ($i=0; $i<15; $i++){
              // si pas d'image alors ne saffiche pas
              if (preg_match("#jpg#", $json->results[$i]->poster_path)) {
                echo '<div class="ensalle header '  .$i.  '">
              En salle
                <div class="header-content">
                <img src="http://image.tmdb.org/t/p/w500'.$json->results[$i]->poster_path.'" alt="">
                </div>
              </div>';}}
            ?>
          </div>
        </div>
      </div>

    <div id="openModal" class="modalDialog">
      <div>
      <a href="#close" title="Close" class="close">X</a>
      <div class="espace">Un bug, une idée ou une information?</br>Envoyez nous un mail.</div>
      <div class="row">
          <form action="php/mail.php" method="post" class="col s12">
            <div class="row">
              <div class="input-field col s6 marge2">
                <input name="prenom" id="prenom" type="text" class="validate text-blue text-darken-2">
                <label for="prenom">Votre prenom</label>
            </div>
              <div class="input-field col s6 marge2">
                <input name="nom" id="nom" type="text" class="validate text-blue text-darken-2">
                <label for="nom">Votre nom</label>
            </div>
          </div>
            <div class="row">
              <div class="input-field col s12 marge2">
                <input name="mail" id="email" type="email" class="validate text-blue text-darken-2">
                <label for="email">Votre mail</label>
              </div>
            </div>
            <div class="row">
              <div class="input-field col s12 marge2">
                <input name="sujet" id="sujet" type="text" class="validate">
                <label for="sujet">Sujet</label>
              </div>
            </div>
            <div class="row">
            <div class="input-field col s12 marge2">
              <textarea name="message" id="message" class="materialize-textarea validate" type="text"></textarea>
              <label for="textarea1">Message</label>
            </div>
          </div>
          <button class="btn waves-effect waves-light blue darken-2 btnchercher" id="submitButton" type="submit" name="action" value="submit">Envoyer</button>
          </form>
        </div>
    </div>
    </div>

    <div id="openModal2" class="modalDialog">
      <div>
      <a href="#close" title="Close" class="close">X</a>
      <div class="envoie">L'email c'est bien envoyé.</div>
    </div>
    </div>

    <div id="openModal3" class="modalDialog">
      <div>
      <a href="#close" title="Close" class="close">X</a>
      <div class="no">Une erreur c'est produite lors de l'envois de l'email.</div>
    </div>
    </div>

      <a class="btn-floating btn-large blue darken-2 aide" href="#openModal"><i class="material-icons">code</i></a>
      <div class="alpha">
        <img src="img/alpha.png" alt="" />
      </div>


    <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script type="text/javascript" src="js/materialize.min.js"></script>
    <script type="text/javascript" src="js/materialize.js"></script>
    <script type="text/javascript" src="js/script.js"></script>

        <script>
            $(document).ready(function () {
                $(".button-collapse").sideNav();
            })
            $(document).ready(function () {
                $('select').material_select();
            });
            $(document).ready(function(){
              	$("#headerMrS > div:gt(0)").hide();

              		var carouselInt = '';

              	var carouDiv = function(){
              	    carouselInt = setInterval(function() {
              	      $('#headerMrS > div:first')
              	        .fadeOut(3000)
              	        .next()
              	        .fadeIn(3000)
              	        .end()
              	        .appendTo('#headerMrS');
              	    },  5000);
              	};

              	$(carouDiv());//Initialise the carousel function

              	$("#headerMrS").hover(function(){//Stop the carousel on hover
              	 clearInterval(carouselInt);
              	  },function(){
              	  carouDiv();
              	});
              });

              // 2eme ---------------------------------------
              $(document).ready(function(){
                	$("#headerMrS2 > div:gt(0)").hide();

                		var carouselInt = '';

                	var carouDiv = function(){
                	    carouselInt = setInterval(function() {
                	      $('#headerMrS2 > div:first')
                	        .fadeOut(3000)
                	        .next()
                	        .fadeIn(3000)
                	        .end()
                	        .appendTo('#headerMrS2');
                	    },  5000);
                	};

                	$(carouDiv());//Initialise the carousel function

                	$("#headerMrS2").hover(function(){//Stop the carousel on hover
                	 clearInterval(carouselInt);
                	  },function(){
                	  carouDiv();
                	});
                });
        </script>
    </body>
</html>
