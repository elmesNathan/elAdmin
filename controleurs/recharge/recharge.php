<?php 
//Model(s)
include_once 'models/tresorerie/id_client.php';
include_once 'models/tresorerie/credit_banque.php';

//id_client utile pour les requettes
$data_user['id_client'] = id_client($_SESSION['pseudo'], $bdd);

//Traitements Ecriture
if (isset($_POST['recharger'])) {
	
	//Récupération des données du formulaire
	$data_user['num_client'] = htmlspecialchars($_POST['num_client']);
	$data_user['montant'] = htmlspecialchars($_POST['montant']);
	$data_user['CDF_Ref'] = htmlspecialchars($_POST['CDF_Ref']);
	$data_user['date_recharge'] = htmlspecialchars($_POST['date_recharge']);
	
	//Verification du mot de passe
	if (credit_banque($data_user, $bdd)) {
		header("Location:tresorerie.php");
	}else{
		$message = "Veuillez vérifier vos informations...";
		header("Location:recharge.php?message=". $message);
	}
}

//Vue
include_once 'vues/tresorerie/recharge.php';