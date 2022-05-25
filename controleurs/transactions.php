<?php 
//Models
include_once 'models/page/data_encours.php';
include_once 'models/page/data_anterieres.php';
include_once 'models/page/data_recharges.php';
include_once 'models/page/data_paies.php';

//Récupération data Client
if ($compte == "Client") {
	$rech_encours = data_encours($compte, $pseudo, $bdd);
	$rech_anterieres = data_anterieres($compte, $pseudo, $bdd);

//Récupration data Auteur
} elseif ($compte == "Auteur" AND !($pseudo == "admin")) {
	$paie_disponibles = data_disponible($compte, $pseudo, $bdd);
	$paie_anterieres = data_anterieres($compte, $pseudo, $bdd);

//Récupération data Administrateur
} else {
	$rech_attentes = data_recharges($bdd);
	$paie_attentes = data_paies($bdd);
}