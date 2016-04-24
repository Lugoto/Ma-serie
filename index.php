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
                        <option value="&with_genres=28">  Action</option>
                        <option value="&with_genres=12">  Adventure</option>
                        <option value="&with_genres=16">  Animation</option>
                        <option value="&with_genres=35">  Comedy</option>
                        <option value="&with_genres=80">  Crime</option>
                        <!-- <option value="99">Documentary</option> -->
                        <option value="&with_genres=18">  Drama</option>
                        <option value="&with_genres=10751">  Family</option>
                        <option value="&with_genres=14">  Fantasy</option>
                        <option value="&with_genres=10769">  Foreign</option>
                        <option value="&with_genres=36">  History</option>
                        <option value="&with_genres=27">  Horror</option>
                        <option value="&with_genres=10402">  Music</option>
                        <option value="&with_genres=9648">  Mystery</option>
                        <option value="&with_genres=10749">  Romance</option>
                        <option value="&with_genres=878">  Science Fiction</option>
                        <option value="&with_genres=10770">  TV Movie</option>
                        <option value="&with_genres=53">  Thriller</option>
                        <option value="&with_genres=10752">  War</option>
                        <option value="&with_genres=37">  Western</option>
                    </select>
                  </div>

                  <div class="blanc">
                    <select name="annee">
                        <option value="0" disabled selected>   Annee</option>
                        <option value="&primary_release_year=2016">  2016</option>
                        <option value="&primary_release_year=2015">  2015</option>
                        <option value="&primary_release_year=2014">  2014</option>
                        <option value="&primary_release_year=2013">  2013</option>
                        <option value="&primary_release_year=2012">  2012</option>
                        <option value="&primary_release_year=2011">  2011</option>
                        <option value="&primary_release_year=2010">  2010</option>
                        <option value="&primary_release_year=2009">  2009</option>
                        <option value="&primary_release_year=2008">  2008</option>
                        <option value="&primary_release_year=2007">  2007</option>
                        <option value="&primary_release_year=2006">  2006</option>
                        <option value="&primary_release_year=2005">  2005</option>
                        <option value="&primary_release_year=2004">  2004</option>
                        <option value="&primary_release_year=2003">  2003</option>
                        <option value="&primary_release_year=2002">  2002</option>
                        <option value="&primary_release_year=2001">  2001</option>
                        <option value="&primary_release_year=2000">  2000</option>
                        <option value="&primary_release_year=1999">  1999</option>
                        <option value="&primary_release_year=1998">  1998</option>
                        <option value="&primary_release_year=1997">  1997</option>
                        <option value="&primary_release_year=1996">  1996</option>
                        <option value="&primary_release_year=1995">  1995</option>
                        <option value="&primary_release_year=1994">  1994</option>
                        <option value="&primary_release_year=1993">  1993</option>
                        <option value="&primary_release_year=1992">  1992</option>
                        <option value="&primary_release_year=1991">  1991</option>
                        <option value="&primary_release_year=1990">  1990</option>
                        <option value="&primary_release_year=1989">  1989</option>
                        <option value="&primary_release_year=1988">  1988</option>
                        <option value="&primary_release_year=1987">  1987</option>
                        <option value="&primary_release_year=1986">  1986</option>
                        <option value="&primary_release_year=1985">  1985</option>
                        <option value="&primary_release_year=1984">  1984</option>
                        <option value="&primary_release_year=1983">  1983</option>
                        <option value="&primary_release_year=1982">  1982</option>
                        <option value="&primary_release_year=1981">  1981</option>
                        <option value="&primary_release_year=1980">  1980</option>

                    </select>
                  </div>

                  <div class="blanc">
                    <select name="tri">
                        <option value="0" disabled selected>   Tri</option>
                        <option value="&sort_by=vote_count.desc">  Meilleure note</option>
                        <option value="&sort_by=popularity.desc">  Popularite</option>
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
