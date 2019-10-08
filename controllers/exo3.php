<?php

	$title = "Exercice 3";
    $consigne = "Combien reste-t-il de jours avant la fin de votre formation.";

    $dateFin = new DateTime("2020-05-28");
    $date = new DateTime();
    $date->setTimestamp(time());
    $duree = date_diff($date, $dateFin);

?>
