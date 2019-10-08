<?php

    $title = "Exercice 6";
    $consigne = "Montrez que la date du 17/17/2019 est erronée.";

    $date = "17/17/2019";

    list($d, $m, $y) = explode("/",$date);

    if(!checkdate($m, $d, $y)){
        $validMsg = $date." n'est pas valide.";
    }
    else{
        $validMsg = $date." est valide.";
    }

?>