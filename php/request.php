<?php
//    print_r($_POST);

    $json = file_get_contents('https://api.themoviedb.org/3/genre/'.$_POST['select'].'/movies?api_key=2605db3bb9a62669d5158c263210dea4');
    $json = json_decode($json);
//    print_r($json["results"]);

echo '<html>
  <head>
  <title>My Now Amazing Webpage</title>
  <link rel="stylesheet" type="text/css" href="../slick/slick.css"/>
  <link rel="stylesheet" type="text/css" href="../slick/slick-theme.css"/>
  </head>
  <body>

  <div  class="responsive">';
    for ($i=0; $i<10; $i++){
        echo "<div>";
        echo '<img src="http://image.tmdb.org/t/p/w500'.$json->results[$i]->poster_path.'" alt="">';
        echo "</div>";
    }
  echo '</div>

  <script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
  <script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
  <script type="text/javascript" src="../slick/slick.min.js"></script>

  <script type="text/javascript">
    $(document).ready(function(){
        $(\'.multiple-items\').slick({
            infinite: true,
            slidesToShow: 3,
            slidesToScroll: 3
        });
        
        $(\'.responsive\').slick({
              dots: true,
              infinite: false,
              speed: 300,
              slidesToShow: 3,
              slidesToScroll: 3,  
              adaptiveHeight: true,
              responsive: [
                {
                  breakpoint: 1024,
                  settings: {
                    slidesToShow: 3,
                    slidesToScroll: 3,
                    infinite: true,
                    dots: true
                  }
                },
                {
                  breakpoint: 600,
                  settings: {
                    slidesToShow: 2,
                    slidesToScroll: 2
                  }
                },
                {
                  breakpoint: 480,
                  settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                  }
                }
              ]
            });
    });
  </script>

  </body>
</html>';


