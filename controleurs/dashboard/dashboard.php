<?php 
//Model(s)
include_once 'models/page/all_data_user.php';
include_once 'models/metrics/count_articles.php';
include_once 'models/metrics/count_products.php';
include_once 'models/dashboard/coordonnees_graphique.php';
include_once 'models/dashboard/lignes_articles.php';
include_once 'models/dashboard/lignes_ouvrages.php';
include_once 'models/dashboard/lignes_intervenants.php';

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

//Récupération des métrics
$metric_articles = count_articles($compte, $pseudo, $bdd);
$metric_products = count_products($compte, $pseudo, $bdd);


//Recupération des données du graphique
if (date("m") < 7) {
	$offset = 0; 
} else {
	$offset = 5;
}
$data_graphique = coordonnees_graphique($compte, $pseudo, $offset, $bdd);

//Recupération des données de l'actif
$data_actifs['articles'] = lignes_articles($compte, $pseudo, $bdd);
$articles = $data_actifs['articles'];
$data_actifs['ouvrages'] = lignes_ouvrages($compte, $pseudo, $bdd);
$ouvrages = $data_actifs['ouvrages'];
$data_actifs['intervenants'] = lignes_intervenants($compte, $pseudo, $bdd);
$intervenants = $data_actifs['intervenants'];

//Appel de la vue
include_once 'vues/dashboard/dashboard.php';