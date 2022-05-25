<?php 
function lignes_articles($compte, $pseudo, $bdd)
{
	if ($compte == "Client") {
		$req = $bdd -> prepare('
				SELECT Article.id, Article.couverture, Article.titre, Article.date_pub, Auteur.prenom, Auteur.nom, Auteur.postnom
				FROM Article
				INNER JOIN Auteur
				ON Article.id_auteur = Auteur.id
				WHERE Article.id = (SELECT id_article 
									FROM Commentaire
									INNER JOIN Client
									ON Commentaire.id_client = Client.id
									WHERE Client.pseudo = ?
									) AS Article_lu
			');
		$req -> execute(array($pseudo));
		return $data = ($req -> rowCount() > 0) ? $req -> fetch() : array();
	} else {
		$req = $bdd -> prepare('
				SELECT Article.id, Article.couverture, Article.titre, Article.date_pub, Auteur.prenom, Auteur.nom, Auteur.postnom
				FROM Article
				INNER JOIN Auteur
				ON Article.id_auteur = Auteur.id
				WHERE Article.id_auteur = ?
			');
		$req -> execute(array($pseudo)); 
		return $data = ($req -> rowCount() > 0) ? $req -> fetch() : array();
	}	
}