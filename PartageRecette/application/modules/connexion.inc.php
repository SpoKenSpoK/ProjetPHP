<?php
	if(isset($_REQUEST['login']) && isset($_REQUEST['mdp'])){
		$login = $_REQUEST['login'];
		$mdp = $_REQUEST['mdp'];

		if(/*$login == /*(requete pour sortir ce login)*/ /*&& $mdp == /*(requete pour faire sortir juste le mot de passe de l'utilisateur $login)*/){
			session_start();
			$_SESSION['login'] = $login;
			$_SESSION['mdp'] = $mdp;

			header('location: ../../index.php?page=');
		}
		else{
			header('location: ../../index.php?page=connexion');
		}
	}
?>