<?php
//    print_r($_POST);

    $json = file_get_contents('https://api.themoviedb.org/3/genre/'.$_POST['select'].'/movies?api_key=2605db3bb9a62669d5158c263210dea4');
    $json = json_decode($json);
//    print_r($json["results"]);

    for ($i=0; $i<15; $i++){

        echo '<img class="reflect cloud9-item" src="http://image.tmdb.org/t/p/w500'.$json->results[$i]->poster_path.'" alt="">';


    }
