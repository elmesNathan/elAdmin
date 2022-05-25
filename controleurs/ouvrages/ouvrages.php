<?php 
//Model(s)
include_once 'models/page/all_data_user.php';
include_once 'models/ouvrages/last_ouvrage.php';
include_once 'models/ouvrages/lignes_ouvrages.php';
include_once 'models/ouvrages/lignes_intervenants.php';


//TRAITEMENT DE LA PAGE
$compte = $_SESSION['compte'];
$pseudo = $_SESSION['pseudo'];

//Récupération des données de l'utilisateur
$data = all_data_user($compte, $pseudo, $bdd);
foreach ($data as $key => $value) {
	$data_user[$key] = $value;
}

//Récupération des données du menu
include_once 'controleurs/notif_banque.php';

//Recupération des données de l'actif
if (isset($_SESSION['id_ouvrage'])) {
	$recent_ouvrage = last_ouvrages($_SESSION['id_ouvrage'], $bdd);
}
$data_actifs['ouvrage'] = lignes_ouvrages($compte, $pseudo, $bdd);
$data_actifs['intervenants'] = lignes_intervenants($compte, $pseudo, $bdd);

//Appel de la vue
include_once 'vues/ouvrages/ouvrages.php';