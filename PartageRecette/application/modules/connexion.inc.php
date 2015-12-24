<?php

if(isset($_REQUEST['login']) && isset($_REQUEST['mdp'])){

	/*************creation de l'acces bdd***************/
	define('DB_HOST', 'localhost');
	define('DB_DATABASE', 'recette');
	define('DB_USERNAME', 'u_recette');
	define('DB_PASSWORD', 'SJzEeqLb2HHeNYVV');

	try{
		$PDO_BDD = new PDO('mysql:host='.DB_HOST.';dbname='.DB_DATABASE, DB_USERNAME, DB_PASSWORD);
		$PDO_BDD->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$PDO_BDD->exec("SET NAMES 'utf8'");
	}
	catch(Exception $e){
		echo 'Erreur : '.$e->getMessage().'<br />';
		echo 'N° : '.$e->getCode();
		exit();
	}

	/***************************************************/

	$login = $_REQUEST['login'];
	$mdp = $_REQUEST['mdp'];

	if(1/*(requete pour sortir ce login)*/ /*&& $mdp == /*(requete pour faire sortir juste le mot de passe de l'utilisateur $login)*/){
		session_start();
		$_SESSION['login'] = $login;

		header('location: ../../index.php?page=liste');
	}
	else{
		header('location: ../../index.php?page=connexion');
	}
}
?>