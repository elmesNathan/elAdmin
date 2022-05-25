<?php 
function lignes_intervenants($compte, $pseudo, $bdd)
{
	if ($compte == "Client") {
		$req = $bdd -> prepare('
				SELECT Auteur.nom, Auteur.postnom, Auteur.prenom, Auteur.grade AS comp, COUNT(Ouvrage.id) AS nbre
				FROM Auteur
				INNER JOIN Ouvrage
				ON Ouvrage.id_auteur = Auteur.id
				WHERE Ouvrage.id = (SELECT id_article 
									FROM Avis
									INNER JOIN Client
									ON Avis.id_client = Client.id
									WHERE Client.pseudo = ?
									) Ouvrage_lu
				GROUP BY Ouvrage.id_auteur
			');
		$req -> execute(array($pseudo));
		return $data = ($req -> rowCount() > 0) ? $req -> fetch() : array();
	} else {
		$req = $bdd -> prepare('
				SELECT Client.nom, Client.postnom, Client.prenom, Client.niv_etude AS comp, COUNT(Avis.id) AS nbre
				FROM Client
				INNER JOIN Avis
				ON Avis.id_client = Client.id
				WHERE Avis.id_ouvrage = (SELECT id 
										FROM Ouvrage
										INNER JOIN Auteur
										ON Ouvrage.id_auteur = Auteur.id
										WHERE Auteur.pseudo = ?
										) AS Ouvrage_consulte
				GROUP BY Avis.id_ouvrage
			');
		$req -> execute(array($pseudo));
		return $data = ($req -> rowCount() > 0) ? $req -> fetch() : array();
	}
}