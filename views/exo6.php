<?php
    include("../controllers/exo6.php");
    include("header.php");
?>

	<div class="container">
	    <div class="row">
	        <div class="col s12 card-panel">
	            <p class="flow-text center-align"><?= $validMsg ?></p>
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

    $date = "17/17/2019";

    list($d, $m, $y) = explode("/",$date);

    if(!checkdate($m, $d, $y)){
        $msg = $date." n'est pas valide.";
    }
    else{
        $msg = $date." est valide.";
    }

    echo $msg;

                        </code></pre>
                    </div>        
                </li>
            </ul>
        </div>
	</div>


<?php
    include("footer.php");
?>