<?php 
function last_ouvrage($id_ouvrage, $bdd)
{
	$req = $bdd -> prepare('
			SELECT Ouvrage.id, Ouvrage.couverture, Ouvrage.titre, Ouvrage.date_pub, Ouvrage.problematique
			, Ouvrage.prenom, Ouvrage.nom, Ouvrage.postnom
			FROM Ouvrage
			WHERE Ouvrage.id = ?
		');
	$req -> execute(array($id_ouvrage)); 
	return $data = ($req -> rowCount() > 0) ? $req -> fetch() : FALSE;
}