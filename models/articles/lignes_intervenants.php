<?php 
function lignes_intervenants($compte, $pseudo, $bdd)
{
	if ($compte == "Client") {
		$req = $bdd -> prepare('
				SELECT Auteur.nom, Auteur.postnom, Auteur.prenom, Auteur.grade AS comp, COUNT(Article.id) AS nbre
				FROM Auteur
				INNER JOIN Article
				ON Article.id_auteur = Auteur.id
				WHERE Article.id = (SELECT id_article 
									FROM Commentaire
									INNER JOIN Client
									ON Commentaire.id_client = Client.id
									WHERE Client.pseudo = ?
									) Article_lu
				GROUP BY Article.id_auteur
			');
		$req -> execute(array($pseudo));
		return $data = ($req -> rowCount() > 0) ? $req -> fetch() : array();
	} else {
		$req = $bdd -> prepare('
				SELECT Client.nom, Client.postnom, Client.prenom, Client.niv_etude AS comp, COUNT(Commentaire.id) AS nbre
				FROM Client
				INNER JOIN Commentaire
				ON Commentaire.id_client = Client.id
				WHERE Commentaire.id_article = (SELECT id 
												FROM Article
												INNER JOIN Auteur
												ON Article.id_auteur = Auteur.id
												WHERE Auteur.pseudo = ?
												) AS Articlu_consulte
				GROUP BY Commentaire.id_article
			');
		$req -> execute(array($pseudo));
		return $data = ($req -> rowCount() > 0) ? $req -> fetch() : array();
	}
}