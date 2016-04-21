<?php
 // print_r($_POST);

  $json = file_get_contents('https://api.themoviedb.org/3/movie/now_playing?api_key=2605db3bb9a62669d5158c263210dea4&language=fr&include_image_language=fr');
    // $json = file_get_contents('http://api.themoviedb.org/3/discover/tv&api_key=2605db3bb9a62669d5158c263210dea4&language=fr&include_image_language=fr');
    // $json = file_get_contents('https://api.themoviedb.org/3/tv/popular?api_key=2605db3bb9a62669d5158c263210dea4');
   $json = json_decode($json);
