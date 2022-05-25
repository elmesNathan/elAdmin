<?php
function count_products($compte, $pseudo, $bdd)
{
	if ($compte == "Client") {
		$req = $bdd -> prepare('
				SELECT  COUNT(*)
				FROM Avis
				INNER JOIN Ouvrage
				ON Avis.id_ouvrage = Ouvrage.id
				WHERE id_client = (SELECT id FROM Client WHERE pseudo = ?) AS acheteur
				GROUP BY id_ouvrage
			');
		$req -> execute(array($pseudo));
		return $data = ($req -> rowCount() > 0) ? $req -> fetch() : 0 ;
	} else {
		$req = $bdd -> prepare('
				SELECT COUNT(*)
				FROM Avis
				INNER JOIN Ouvrage
				ON Avis.id_ouvrage = Ouvrage.id
				WHERE id_ouvrage = (SELECT id 
									FROM Ouvrage 
									WHERE id_auteur = (SELECT id
														FROM Auteur
														WHERE pseudo = ?
														) AS fourniseur
									) AS produit
			');
		$req -> execute(array($pseudo));
		return $data = ($req -> rowCount() > 0) ? $req -> fetch() : 0 ;
	}
	
}