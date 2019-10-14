<?php 
	session_start();
	include "../controllers/exoSession.php";
	include "header.php";

	if(isset($_SESSION['login'])){
		header("Location: exoSessionSuccess.php");
	}
	else{
	}
?>

	
	<div class="container center">
		<form method="post" action="">
			<div class="row">
				<div class="input-field inline">
					<input placeholder="Login" type="text" class="validate" id="loginField" name="login">
					<span class="errorSpan"><?= (isset($errors['login'])) ? $errors['login'] : "" ?></span>
				</div>
				<div class="input-field inline">
					<input placeholder="Mot de passe" type="password" class="validate" id="passwordField" name="password">
					<span class="errorSpan"><?= (isset($errors['password'])) ? $errors['password'] : "" ?></span>
				</div>
			</div>
			<input type="submit" class="btn" id="submitBtn">
		</form>
	</div>
<?php
	include "footer.php";
?>