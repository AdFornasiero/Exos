<?php

	session_start();
	$title = "";
	$consigne = "";

	if(isset($_POST['signout'])){
		//unset($_SESSION);
		$_SESSION = [];
		header("Location: exoSession.php");
	}

	include "header.php";

?>
	<div class="container center">
		<h4>
            Bienvenue <?= $_SESSION['login']  ?>
        </h4>
        <br>
        <p>
        	$_SESSION:
        	<?= var_dump($_SESSION) ?>
        </p>
        <form action="" method="post">
            <input type="submit" class="btn" name="signout" value="Se déconnecter">
        </form>
    </div>

<?php
	include "footer.php";