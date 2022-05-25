<?php 
try{
	$bdd = new PDO(
		'mysql:host=mysql-elmes.alwaysdata.net; dbname=elmes_data',
		'elmes',
		'mot2p@sse' 
		);

}catch(Exception $e){
die(' Erreur : ' . $e->getMessage());
}