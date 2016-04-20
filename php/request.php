<?php
 // print_r($_POST);
 if (isset($_POST['select'])) {
  $json = file_get_contents('https://api.themoviedb.org/3/genre/'.$_POST['select'].'/movies?api_key=2605db3bb9a62669d5158c263210dea4&language=fr&include_image_language=fr');
}else{
  $json = file_get_contents('https://api.themoviedb.org/3/movie/popular?api_key=2605db3bb9a62669d5158c263210dea4&language=fr&include_image_language=fr');
}
    // $json = file_get_contents('http://api.themoviedb.org/3/discover/tv&api_key=2605db3bb9a62669d5158c263210dea4&language=fr&include_image_language=fr');
    // $json = file_get_contents('https://api.themoviedb.org/3/tv/popular?api_key=2605db3bb9a62669d5158c263210dea4');
   $json = json_decode($json);
    // print_r($json);
    if (isset($_POST['annee'])) {
      for ($i=0; $i<15; $i++){
       if (preg_match("#".$_POST['annee']."#", $json->results[$i]->release_date)) {
         echo '<img class="reflect cloud9-item" src="http://image.tmdb.org/t/p/w500'.$json->results[$i]->poster_path.'" alt="">';
        }
      }
    }else {
      for ($i=0; $i<15; $i++){
         echo '<img class="reflect cloud9-item" src="http://image.tmdb.org/t/p/w500'.$json->results[$i]->poster_path.'" alt="">';
      }
    }
