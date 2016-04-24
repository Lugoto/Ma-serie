<?php
if (isset($_POST['select'])) {
  $select = $_POST['select'];
}else{
  $select = '';
}

if (isset($_POST['annee'])) {
  $annee = $_POST['annee'];
}else{
  $annee = '';
}

if (isset($_POST['tri'])) {
  $tri = $_POST['tri'];
}else{
  $tri = '';
}

if (isset($_POST['fs'])) {
  $fs = $_POST['fs'];
}else{
  $fs = 'movie';
}

$json = file_get_contents('https://api.themoviedb.org/3/discover/'.$fs.'?'.$select.''.$annee.''.$tri.'&api_key=2605db3bb9a62669d5158c263210dea4&language=fr&include_image_language=fr');
$json = json_decode($json);

for ($i=0; $i<15; $i++){
  if (preg_match("#jpg#", $json->results[$i]->poster_path)) {
   echo '<img class="reflect cloud9-item" src="http://image.tmdb.org/t/p/w500'.$json->results[$i]->poster_path.'" alt="">';
 }
}
