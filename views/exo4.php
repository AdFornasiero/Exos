<?php
    include("../controllers/exo4.php");
    include("header.php");
?>

	<div class="container">
	    <div class="row">
	        <div class="col s12 card-panel">
	            <p class="flow-text center-align">Il reste <?= $joursRestants ?> jours.</p>
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

    $dateFin = mktime(0, 0, 0, 5, 28, 2020);
    $duree = $dateFin - time();
    $joursRestants = floor($duree / 60 / 60 / 24);

    echo $joursRestants;

                        </code></pre>
                    </div>        
                </li>
            </ul>
        </div>
	</div>

<?php
    include("footer.php");
?>