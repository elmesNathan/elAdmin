<?php 
function verif_pseudo($pseudo, $bdd)
{
	$req = $bdd -> prepare('
			SELECT pseudo
		');
	
	return $data = ($req -> execute(array($nom, $postnom, $prenom, $sexe, $pseudo, $pass))) ? "Tout c'est bien passé" : "";
}