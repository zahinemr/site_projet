<?php

$file = 'borne.json';
// indiqué le chemin de votre fichier JSON, il peut s'agir d'une URL pour permettre de voila quoi  ta capté frère
$data = file_get_contents($file);

$json_a = json_decode($data, true);

foreach ($json_a as $borne_det => $borne) {

    echo $borne['id'] . $borne['etablissement'] . $borne['salle'];

}

/*
require_once('api-key.php');
$city = "Yakutsk";
$apiUrl = "http://api.openweathermap.org/data/2.5/weather?q=" . $city . "&units=metric&APPID=" . API_KEY;

$response = file_get_contents($apiUrl, False);

$data = json_decode($response);

print_r($data);*/