<?php
    
    $title = "Exercice 8";
    $consigne = "Ajoutez 1 mois à la date courante.";

    $date = new DateTime();
    $date->setTimestamp(time());
    $date->add(new DateInterval("P1M"));

?>
