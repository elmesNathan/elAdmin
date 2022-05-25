<?php 
//Déclaration session
session_start();

//Model(s)
include_once 'models/index/verif_user.php';

//Traitements
if (isset($_POST['connection'])) {
	
	//Récupération des données
	$compte = htmlspecialchars($_POST['compte']);
	$pseudo = htmlspecialchars($_POST['pseudo']);
	$pass = crypt(htmlspecialchars($_POST['pass']), $pseudo);

	//Authentification
	if (verif_user($compte, $pseudo, $pass, $bdd)) {

		//Déclaration de session
		$_SESSION['pseudo'] = $pseudo;
		$_SESSION['compte'] = $compte;
		header("Location:dashboard.php");
	} else {
		
		//Login ou mot de passe incorrecte
		$message = "Login ou mot de passe incorrecte";
		header("Location: index.php?message=". $message);
	}
	


}

//Vue
include_once 'vues/index/index.php';