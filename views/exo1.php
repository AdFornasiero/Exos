<?php
    include("../controllers/exo1.php");
    include("header.php");
?>

    <div class="container">
        <div class="row">
            <div class="col s12 card-panel">
                <p class="flow-text center-align">Nous sommes le <?= $strDate ?></p>
            </div>
        </div>

        <div class="row">
            <ul class="collapsible popout">
                <li>
                    <div class="collapsible-header">
                        <span class="centered"><i class="material-icons iconSize">settings_ethernet</i></span>
                    </div>
                    <div class="collapsible-body">
                        <pre><code class="php hljs">

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

                        </code></pre>
                    </div>        
                </li>
            </ul>
        </div>
    </div>



<?php
    include("footer.php");
?>