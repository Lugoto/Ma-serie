<?php

// print_r($_POST);

$to = 'lucas.pozzer@ynov.com';
$sujet = $_POST['sujet'];
$message = $_POST['message'];
$mail = $_POST['mail'];
$prenom = $_POST['prenom'];
$nom = $_POST['nom'];
$headers .= 'From: '.$prenom.' '.$nom.' <'.$mail.'>';

if (mail ( $to , $sujet , $message, $headers))
{
        header('Location: ../index.php#openModal2');
}
else
{
        header('Location: ../index.php#openModal3');
}

?>
