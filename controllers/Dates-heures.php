<h1>Dates et heures</h1>


<h2>Exercice 1</h2>

<?php

	/*setlocale(LC_TIME, "fr_FR", "French");
	echo strftime("%e %B %Y", time());*/
	
	$mois = ["Janvier", "Février", "Mars", "Avril", "Mai", "Juin", "Juillet", "Août", "Septembre", "Octobre", "Novembre", "Décembre"];
	$jours = ["Lundi", "Mardi", "Mercredi", "Jeudi", "Vendredi", "Samedi", "Dimanche"];
	$date = new DateTime();
	$date->setTimestamp(time());
	echo "Nous sommes le ".$jours[$date->format("w")-1]." ".$date->format("j")." ".$mois[$date->format("n")-1]." ".$date->format("Y");

?>

<h2>Exercice 2</h2>

<?php

	$date = new DateTime("2019-07-14");
	$week = $date->format("W");
	echo "C'est la ".$week."e semaine.";

?>

<h2>Exercice 3</h2>

<?php

	$dateFin = new DateTime("2020-05-28");
	$date = new DateTime();
	$date->setTimestamp(time());
	$duree = date_diff($date, $dateFin);

	echo "Il reste ".$duree->days." jours de formation.";

?>

<h2>Exercice 4</h2>

<?php

	$dateFin = mktime(0, 0, 0, 5, 28, 2020);
	$duree = $dateFin - time();
	echo "Il reste ".floor($duree / 60 / 60 / 24)." jours.";

?>

<h2>Exercice 5</h2>

<?php

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

	echo "Le prochaine année bissextile, c'est ".$year;

?>

<h2>Exercice 6</h2>

<?php
	
	/*try {
    	$date = new DateTime("2019-17-17");
	} catch (Exception $e) {
	    echo "Date invalide";
	    exit(1);
	}*/

	$date = "17/17/2019";
	list($d, $m, $y) = explode("/",$date);

	if(!checkdate($m, $d, $y)){
		echo $date." n'est pas valide.";
	}
	else{
		echo $date." est valide.";
	}

?>

<h2>Exercice 7</h2>

<?php

	$date = new DateTime();
	$date->setTimestamp(time());
	echo "Il est ".$date->format("H\hi");

?>

<h2>Exercice 8</h2>

<?php

	$date = new DateTime();
	$date->setTimestamp(time());
	$date->add(new DateInterval("P1M"));
	echo "Dans un mois, on sera le ".$date->format("d/m/Y");

?>