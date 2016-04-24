<?php
 // print_r($_POST);
if (isset($_POST['select']) && isset($_POST['annee'])) {
   $json = file_get_contents('https://api.themoviedb.org/3/discover/movie?with_genres='.$_POST['select'].'&primary_release_year='.$_POST['annee'].'&sort_by=popularity.desc&api_key=2605db3bb9a62669d5158c263210dea4&language=fr&include_image_language=fr');
}
elseif (isset($_POST['select'])) {
  $json = file_get_contents('https://api.themoviedb.org/3/discover/movie?with_genres='.$_POST['select'].'&sort_by=popularity.desc&api_key=2605db3bb9a62669d5158c263210dea4&language=fr&include_image_language=fr');
}
elseif (isset($_POST['annee'])) {
  $json = file_get_contents('https://api.themoviedb.org/3/discover/movie?primary_release_year='.$_POST['annee'].'&sort_by=popularity.desc&api_key=2605db3bb9a62669d5158c263210dea4&language=fr&include_image_language=fr');
}

$json = json_decode($json);

for ($i=0; $i<15; $i++){
   echo '<img class="reflect cloud9-item" src="http://image.tmdb.org/t/p/w500'.$json->results[$i]->poster_path.'" alt="">';
}
