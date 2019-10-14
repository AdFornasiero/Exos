<?php

	$title = "Exercice Sessions";
	$consigne = "";

	$loginRegex = '/^[a-zA-Z]*$/';
	$passwordRegex = '/^[a-zA-Z0-9]*$/';

	$errors = [];

	if(!empty($_POST)){

		if(!empty($_POST['login'])){
			if(preg_match($loginRegex, $_POST['login'])){
				$login = htmlspecialchars($_POST['login']);
			}
			else{
				$errors['login'] = 'login invalide';
			}
		}
		else{
			$errors['login'] = 'entrez un login';
		}

		if(!empty($_POST['password'])){
			if(preg_match($passwordRegex, $_POST['password'])){
				$password = password_hash(htmlspecialchars($_POST['password']), PASSWORD_DEFAULT);
			}
			else{
				$errors['password'] = 'mot de passe invalide';
			}
		}
		else{
			$errors['password'] = 'entrez un mot de passe';
		}

		if(count($errors) === 0){
			$_SESSION['login'] = $login;
			$_SESSION['password'] = $password;
		}

	}

?>