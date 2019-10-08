<?php
    include("../controllers/exo5.php");
    include("header.php");
?>

	<div class="container">
	    <div class="row">
	        <div class="col s12 card-panel">
	            <p class="flow-text center-align">Le prochaine année bissextile, c'est <?= $year ?>.</p>
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

    echo $year;

                        </code></pre>
                    </div>        
                </li>
            </ul>
        </div>
	</div>

<?php
    include("footer.php");
?>