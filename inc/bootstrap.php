<?php


// Pour choisir le nombre d'image miniature qu'on l'on souhaite
$nb_images_miniature = 3;
// Pour choisir le nombre d'image qu'on l'on souhaite dans la bannière
$nb_images_bannieres = 4;

$scriptName = $_SERVER['SCRIPT_NAME'];
$path_info = pathinfo($scriptName);
$page = $path_info['filename'];