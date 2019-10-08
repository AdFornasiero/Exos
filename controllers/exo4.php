<?php

    $title = "Exercice 4";
    $consigne = "Reprenez l'exercice 3, mais traitez le problème avec les fonctions de gestion du timestamp, time() et mktime().";

    $dateFin = mktime(0, 0, 0, 5, 28, 2020);
    $duree = $dateFin - time();
    $joursRestants = floor($duree / 60 / 60 / 24);

?>
