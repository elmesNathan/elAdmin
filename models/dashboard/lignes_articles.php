<?php 
function lignes_articles($compte, $pseudo, $bdd)
{
	if ($compte == "Client") {
		$req = $bdd -> prepare('
				SELECT titre, problematique
				FROM Article
				WHERE id = (SELECT id_article 
							FROM Commentaire
							WHERE id_client = (SELECT id FROM Client WHERE pseudo = ?) AS lecteur
							GROUP BY id_article) AS article
			');
		$req -> execute(array($pseudo));
		return $data = ($req -> rowCount() > 0) ? $req -> fetch() : array();
	} else {
		$req = $bdd -> prepare('
				SELECT titre, problematique
				FROM Article
				WHERE id_auteur = (SELECT id FROM Auteur WHERE pseudo = ?) AS auteur
			');
		$req -> execute(array($pseudo));
		return $data = ($req -> rowCount() > 0) ? $req -> fetch() : array();
	}	
}