<?php
    
    $title = "Exercice 1";
    $consigne = "Affichez la date du jour au format mardi 2 juillet 2019.";

    // Déclaration des tableaux pour les mois et jours
	$moiss = ["", "Janvier", "Février", "Mars", "Avril", "Mai", "Juin", "Juillet", "Août", "Septembre", "Octobre", "Novembre", "Décembre"];
    $jours = ["Dimanche", "Lundi", "Mardi", "Mercredi", "Jeudi", "Vendredi", "Samedi"];
    
    // Instanciation de l'objet DateTime
    $date = new DateTime();

    // Instanciation de la méthode setTimestamp
    $date->setTimestamp(time());
    
    $jour = $date->format("w");
    $jourMois = $date->format("j");
    $mois = $date->format("n");
    $annee = $date->format("Y");

    $strDate = $jours[$jour]." ".$jourMois." ".$moiss[$mois]." ".$annee;



?>