<?php
    include("../controllers/exo8.php");
    include("header.php");
?>

	<div class="container">
	    <div class="row">
	        <div class="col s12 card-panel">
	            <p class="flow-text center-align">Dans un mois, on sera le <?= $date->format("d/m/Y") ?>.</p>
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

    $date = new DateTime();
    $date->setTimestamp(time());
    $date->add(new DateInterval("P1M"));

                        </code></pre>
                    </div>        
                </li>
            </ul>
        </div>
	</div>

<?php
    include("footer.php");
?>