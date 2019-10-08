<?php
    include("../controllers/exo3.php");
    include("header.php");
?>


	<div class="container">
	    <div class="row">
	        <div class="col s12 card-panel">
	            <p class="flow-text center-align">Il reste <?= $duree->days ?> jours de formation.</p>
	        </div>
	    </div>

	    <div class="row">
            <ul class="collapsible popout">
                <li>
                    <div class="collapsible-header">
                        <span class="centered"><i class="material-icons iconSize">settings_ethernet</i></span>
                    </div>
                    <div class="collapsible-body">
                        <pre><code class="php">

    $dateFin = new DateTime("2020-05-28");
    $date = new DateTime();
    $date->setTimestamp(time());
    $tempsRestant = date_diff($date, $dateFin);

    echo $tempsRestant;

                        </code></pre>
                    </div>        
                </li>
            </ul>
        </div>
	</div>


<?php
    include("footer.php");
?>