<?php

$file = 'borne.json';
// indiqué le chemin de votre fichier JSON, il peut s'agir d'une URL
$data = file_get_contents($file);

$json_a = json_decode($data, true);

foreach ($json_a as $borne_det => $borne) {
    echo $borne['idBorne'] . $borne['salle'];

}

