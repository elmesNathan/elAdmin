<?php 
//Model(s)
include_once 'models/page/all_data_user.php';
include_once 'models/dashboard/coordonnees_graphique.php';
include_once 'models/tresorerie/all_tiers.php';
include_once 'models/tresorerie/all_factures.php';
include_once 'models/tresorerie/all_lignes_facture.php';
include_once 'models/tresorerie/compt_ouvrages.php';
include_once 'models/tresorerie/compt_tot_ouvrages.php';
include_once 'models/tresorerie/all_operations.php';
include_once 'models/tresorerie/recharges_non_confirmer.php';
//include_once 'models/tresorerie/recharges_confirmer.php';

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


//Recupération des données du graphique
if (date("m") < 7) {
	$offset = 0; 
} else {
	$offset = 5;
}
$data_graphique = coordonnees_graphique($compte, $pseudo, $offset, $bdd);


//Système bancaire
if ($compte == "Client") {
	//$recharges_non_confirmer = recharges_non_confirmer($data_user[id], $bdd);
	//$recharges_confirmer = recharges_confirmer($data_user[id], $bdd);
} else {
//	$paiements_disponibles = paiements_disponibles($data_user[id], $bdd);
//	$paiements_anterieurs = paiements_anterieurs($data_user[id], $bdd);
}



//Récupération des données de l'actif de la trésorerie
$data_actifs['tiers'] = all_tiers($compte, $pseudo, $bdd);
$data_actifs['factures'] = all_factures($compte, $pseudo, $bdd);
if (isset($_GET['date'])) {
	$date = htmlspecialchars($_GET['date']);
	$data_actifs['lignes_facture'] = all_lignes_facture($compte, $pseudo, $date, $bdd);
	$nbre_ouvrages = compt_ouvrages($compte, $pseudo, $date, $bdd);
	$tot_general = compt_tot_ouvrages($compte, $pseudo, $date, $bdd);
}
$data_actifs['operations'] = all_operations($compte, $pseudo, $bdd);

//Appel de la vue
include_once 'vues/tresorerie/tresorerie.php';