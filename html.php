<!doctype html>
<?php include("./html/header.html");?>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <title>Cloud 9 Carousel: JS / HTML5 / CSS3</title>
  <link rel="stylesheet" href="css/common.css">
  <style>
    #showcase {
      height: 90vh;
    }
    #item-title {
      font-size: 29px;
      letter-spacing: 0.13em;
      text-shadow: 1px 1px 6px #C72B2B;
      text-align: center;
      margin-top: 30px;
      margin-bottom: 22px;
    }
    #nav {
      text-align: center;
    }

    .cloud9-item{
      height: 70%;    }
  </style>
</head>
<body>
    <div id="showcase" class="noselect">
      <?php include_once("php/request.php") ?>
    </div>
    <footer>
      <p id="item-title"></p>
      <div id="nav" class="noselect">
        <button class="btn-floating btn-large red" id="left"><i class="material-icons right">skip_previous</i></button>
        <button class="btn-floating btn-large red" id="right"><i class="material-icons right">skip_next</i></button>
      </div>
  <script src="js/lib/jquery.js"></script>
  <script src="js/lib/jquery.reflection.js"></script>
  <script src="js/lib/jquery.cloud9carousel.js"></script>
  <script>
    $(function() {
      var showcase = $("#showcase"), title = $('#item-title')

      showcase.Cloud9Carousel( {
        yOrigin: 42,
        yRadius: 48,
        mirror: {
          gap: 6,
          height: 0.2
        },
        buttonLeft: $("#nav > #left"),
        buttonRight: $("#nav > #right"),
        autoPlay: 1,
        bringToFront: true,
        onRendered: rendered,
        onLoaded: function() {
          showcase.css( 'visibility', 'visible' )
          showcase.css( 'display', 'none' )
          showcase.fadeIn( 1500 )
        }
      } )

      function rendered( carousel ) {
        title.text( carousel.nearestItem().element.alt )

        // Fade in based on proximity of the item
        var c = Math.cos((carousel.floatIndex() % 1) * 2 * Math.PI)
        title.css('opacity', 0.5 + (0.5 * c))
      }

      //
      // Simulate physical button click effect
      //
      $('#nav > button').click( function( e ) {
        var b = $(e.target).addClass( 'down' )
        setTimeout( function() { b.removeClass( 'down' ) }, 80 )
      } )

      $(document).keydown( function( e ) {
        //
        // More codes: http://www.javascripter.net/faq/keycodes.htm
        //
        switch( e.keyCode ) {
          /* left arrow */
          case 37:
            $('#nav > #left').click()
            break

          /* right arrow */
          case 39:
            $('#nav > #right').click()
        }
      } )
    })
      $(document).ready(function () {
          $(".button-collapse").sideNav();
      })
      $(document).ready(function () {
          $('select').material_select();
      });
  </script>
</body>
</html>
