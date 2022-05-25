<?php 
//Model(s)
include_once 'models/page/all_data_user.php';
include_once 'models/articles/last_article.php';
include_once 'models/articles/lignes_articles.php';
include_once 'models/articles/lignes_intervenants.php';


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
if (isset($_SESSION['id_article'])) {
	$recent_article = last_article($_SESSION['id_article'], $bdd);
}
$data_actifs['articles'] = lignes_articles($compte, $pseudo, $bdd);
$data_actifs['intervenants'] = lignes_intervenants($compte, $pseudo, $bdd);

//Appel de la vue
include_once 'vues/articles/articles.php';