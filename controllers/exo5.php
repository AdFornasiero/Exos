<?php

    $title = "Exercice 5";
    $consigne = "Quelle sera la prochaine année bissextile ?";

    $date = new DateTime();
    $date->setTimestamp(time());
    $year = $date->format("Y");
    $isBiss = false;
    while(!$isBiss){
        if(($year % 4 == 0 && $year % 100 != 0) || $year % 400 == 0){
            $isBiss = true;
        }
        else{
            $year++;
        }
    }
?>
