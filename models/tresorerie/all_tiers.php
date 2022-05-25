<?php
function all_tiers($compte, $pseudo, $bdd)
{
	if ($compte = "Client") {
		$req = $bdd -> prepare('
				SELECT Auteur.prenom, Auteur.nom, Auteur.postnom, Ouvrage.ISBN
				FROM Auteur
				INNER JOIN Ouvrage
				ON Auteur.id = Ouvrage.id_auteur
				WHERE Ouvrage.id = (SELECT Avis.id_ouvrage
									FROM Avis
									INNER JOIN Client
									ON Avis.id_client = Client.id
									WHERE Client.pseudo =? AS lecteur
									) AS Livre_achete
				ORDER BY Ouvrage.date_pub ASC
			');
		$req -> execute(array($pseudo));
		return $data = ($req -> rowCount() > 0) ? $req -> fetch() : array() ;
	} else {
		$req = $bdd -> prepare('
				SELECT Lecteur.prenom, Lecteur.nom, Lecteur.postnom, Lecteur.niv_etude, Ouvrage.ISBN
				FROM (SELECT prenom, nom, postnom, niv_etude, Avis.id_ouvrage
					  FROM Client
					  INNER JOIN Avis
					  ON Client.id = Avis.id_client) AS Lecteur
				INNER JOIN Ouvrage
				ON Lecteur.id_ouvrage = Ouvrage.id
				WHERE Ouvrage.id_auteur = (SELECT id
										   FROM Auteur
										   WHERE pseudo =? redacteur
										   ) AS Auteur_livre
				ORDER BY Ouvrage.date_pub ASC
			');
		$req -> execute(array($pseudo));
		return $data = ($req -> rowCount() > 0) ? $req -> fetch() : array() ;
	}	
}