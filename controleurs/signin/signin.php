<?php 
//Model(s)
include_once 'models/signin/add_client.php';
include_once 'models/signin/add_auteur.php';

//Traitements
if (isset($_POST['inscription'])) {
	
	//Récupération des données
	$data_user['compte'] = htmlspecialchars($_POST['compte']);
	$data_user['nom'] = htmlspecialchars($_POST['nom']);
	$data_user['postnom'] = htmlspecialchars($_POST['postnom']);
	$data_user['prenom'] = htmlspecialchars($_POST['prenom']);
	$data_user['sexe'] = htmlspecialchars($_POST['sexe']);
	$data_user['pseudo'] = htmlspecialchars($_POST['pseudo']);
	$data_user['pass'] = htmlspecialchars($_POST['pass']);
	
	//Verification du mot de passe
	if ($data_user['pass'] == htmlspecialchars($_POST['cpass'])) {

		//Inscription utilisateur
		if ($data_user['compte'] == "Client") {

			//inscription client
			$data = add_client($data_user['nom'], $data_user['postnom'], $data_user['prenom'], $data_user['sexe'], $data_user['pseudo'], crypt($data_user['pass'], $data_user['pseudo']), $bdd);	
			header("Location:index.php");

		} else {

			//Inscription auteur
			$data = add_auteur($data_user['nom'], $data_user['postnom'], $data_user['prenom'], $data_user['sexe'], $data_user['pseudo'], crypt($data_user['pass'], $data_user['pseudo']), $bdd);
			header("Location:index.php");
			
		}
		
	}else{
		$message = "Le mot de passe n'est pas identique";
		header("Location:signin.php?message=". $message);
	}
}

//Vue
include_once 'vues/signin/signin.php';