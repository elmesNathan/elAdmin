<?php 
function lignes_intervenants($compte, $pseudo, $bdd)
{
	if ($compte == "Client") {
		$req = $bdd -> prepare('
				SELECT nom, postnom, description
				FROM Auteur
				INNER JOIN Ouvrage
				ON Ouvrage.id_auteur = Auteur.id
				WHERE Ouvrage.id = (SELECT id_ouvrage 
									FROM Avis
									INNER JOIN Client
									ON Avis.id_client = Client.id
									WHERE id_client = (SELECT id
														FROM Client
														WHERE pseudo = ?) AS client
									) ouvrages
			');
		$req -> execute(array($pseudo));
		return $data = ($req -> rowCount() > 0) ? $req -> fetch() : array();
	} else {
		$req = $bdd -> prepare('
				SELECT nom, postnom, description
				FROM Client
				INNER JOIN Avis
				ON Avis.id_client = Client.id
				WHERE Avis.id_ouvrage = (SELECT id_ouvrage 
									FROM Avis
									INNER JOIN Ouvrage
									ON Avis.id_ouvrage = Ouvrage.id
									WHERE id_auteur = (SELECT id
														FROM Auteur
														WHERE pseudo = ?) AS vendeur
									) ouvrages
			');
		$req -> execute(array($pseudo));
		return $data = ($req -> rowCount() > 0) ? $req -> fetch() : array();
	}
}