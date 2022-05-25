<?php
function coordonnees_graphique($compte, $pseudo, $offset, $bdd)
{
	if ($compte == "Client") {
		$req = $bdd -> prepare('
				SELECT  DATEFORMAT(date_cmd) AS mois, AVG(qte*prix) AS moy_mensuel
				FROM Avis
				INNER JOIN Ouvrage
				ON Avis.id_ouvrage = Ouvrage.id
				WHERE id_client = (SELECT id FROM Client WHERE pseudo = ?) AS acheteur
				GROUP BY mois
				LIMIT ?,7
			');
		$req -> execute(array($pseudo, $offset));
		return $data = ($req -> rowCount() > 0) ? $req -> fetch() : 0 ;
	} else {
		$req = $bdd -> prepare('
				SELECT DATEFORMAT(date_cmd) AS mois, AVG(qte*prix) AS moy_mensuel
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
				GROUP BY mois
				LIMIT ?,7
			');
		$req -> execute(array($pseudo, $offset));
		return $data = ($req -> rowCount() > 0) ? $req -> fetch() : 0 ;
	}
	
}