<?php
    include("../controllers/exo2.php");
    include("header.php");
?>

	<div class="container">
	    <div class="row">
	        <div class="col s12 card-panel">
	            <p class="flow-text center-align">C'est la <?= $week ?>e semaine.</p>
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

    $date = new DateTime("2019-07-14");
    $week = $date->format("W");

    echo $week;

                        </code></pre>
                    </div>        
                </li>
            </ul>
        </div>
	</div>

<?php
    include("footer.php");
?>