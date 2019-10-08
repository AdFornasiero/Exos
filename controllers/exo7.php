<?php

    $title = "Exercice 7";
    $consigne = "Affichez l'heure courante sous cette forme : 11h25.";

    $date = new DateTime();
    $date->setTimestamp(time());
    $heure = $date->format("H\hi");

?>
