<?php 
//Déclaration de la session
session_start();

//Destruction des variables de la session
$_SESSION = array();

//Destruction de la session
session_destroy();

//Rédirection à la page d'accueil
header("Location:../index.php");