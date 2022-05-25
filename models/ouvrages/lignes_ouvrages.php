<?php 
function lignes_ouvrages($compte, $pseudo, $bdd)
{
	if ($compte == "Client") {
		$req = $bdd -> prepare('
				SELECT Ouvrage.id, Ouvrage.couverture, Ouvrage.titre, Ouvrage.date_pub, Auteur.prenom, Auteur.nom, Auteur.postnom
				FROM Ouvrage
				INNER JOIN Auteur
				ON Article.id_auteur = Auteur.id
				WHERE Article.id = (SELECT id_article 
									FROM Avis
									INNER JOIN Client
									ON Avis.id_client = Client.id
									WHERE Client.pseudo = ?
									) AS Ouvrage_lu
			');
		$req -> execute(array($pseudo));
		return $data = ($req -> rowCount() > 0) ? $req -> fetch() : array();
	} else {
		$req = $bdd -> prepare('
				SELECT Ouvrage.id, Ouvrage.couverture, Ouvrage.titre, Ouvrage.date_pub, Auteur.prenom, Auteur.nom, Auteur.postnom
				FROM Ouvrage
				INNER JOIN Auteur
				ON Ouvrage.id_auteur = Auteur.id
				WHERE Ouvrage.id_auteur = ?
			');
		$req -> execute(array($pseudo)); 
		return $data = ($req -> rowCount() > 0) ? $req -> fetch() : array();
	}	
}