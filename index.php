<?php include("./html/header.html");?>
<?php include("./php/request2.php");?>
    <body>
        <nav>
            <div class="nav-wrapper">
                <a href="#!" class="brand-logo">Ma Serie</a>
                <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
                <ul class="right hide-on-med-and-down">
                    <li><a class="red darken-2 btn-large hvr-buzz" id="commencer">Commencer le test</a></li>
                </ul>
                <ul class="side-nav" id="mobile-demo">
                    <li><a id="commencer">Commencer le test</a></li>
                </ul>
            </div>
        </nav>
        <div id="test">
            <div class="titre">Trouve la série qui te correspond</div>

            <form action="html.php" method="post">
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

                    <button class="btn waves-effect waves-light blue darken-2" id="submitButton" type="submit" name="action" value="submit">Submit</button>
                </div>
            </form>


            <div class= "faded">
            <div id="headerMrS">
              <?php
              for ($i=0; $i<15; $i++){
                if (preg_match("#jpg#", $json->results[$i]->poster_path)) {
            echo '<div class="header '  .$i.  '">
                Sorties
              		<div class="header-content">
                  <img src="http://image.tmdb.org/t/p/w500'.$json->results[$i]->poster_path.'" alt="">
                    <div class="button-next button-' .($i+1). '"></div>
              			<div class="button-prev button-' .($i-1). '"></div>
              		</div>
                </div>';}}
              ?>
            </div>
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



              	//Direction Arrow links
              	$(".button-sales").click(function(){
              		$(".header").fadeOut(800);
              		$(".sales").animate({opacity:"show"},800);
              	});
              	$(".button-modern").click(function(){
              		$(".header").fadeOut(800);
              		$(".modern").animate({opacity:"show"},800);
              	});
              	$(".button-antique").click(function(){
              		$(".header").fadeOut(800);
              		$(".antique").animate({opacity:"show"},800);
              	});
              });
        </script>
    </body>
</html>
