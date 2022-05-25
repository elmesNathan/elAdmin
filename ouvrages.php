<?php
//Déclaration de session
session_start();

//Protect page
include_once 'controleurs/protect_page.php';

//Déclaration de la page
$page = "Ouvrages";

//Connexion Base de données (elmes_data)
include 'models/connexion_sql.php';

//Appel Back-controleur
include_once 'controleurs/ouvrages/ouvrages.php';