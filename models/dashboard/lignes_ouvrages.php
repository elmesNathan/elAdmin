<?php
function lignes_ouvrages($compte, $pseudo, $bdd)
{
	if ($compte == "Client") {
		$req = $bdd -> prepare('
				SELECT titre, problematique
				FROM Ouvrage 
				WHERE id = (SELECT  id_ouvrage
							FROM Avis
							INNER JOIN Ouvrage
							ON Avis.id_ouvrage = Ouvrage.id
							WHERE id_client = (SELECT id FROM Client WHERE pseudo = ?) AS acheteur
							GROUP BY id_ouvrage) AS produit
			');
		$req -> execute(array($pseudo));
		return $data = ($req -> rowCount() > 0) ? $req -> fetch() : array() ;
	} else {
		$req = $bdd -> prepare('
				SELECT titre, problematique
				FROM Ouvrage 
				WHERE id_auteur = (SELECT id
									FROM Auteur
									WHERE pseudo = ?
									) AS fourniseur
			');
		$req -> execute(array($pseudo));
		return $data = ($req -> rowCount() > 0) ? $req -> fetch() : array() ;
	}
}