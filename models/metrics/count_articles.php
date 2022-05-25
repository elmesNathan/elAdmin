<?php 
function count_articles($compte, $pseudo, $bdd)
{
	if ($compte == "Client") {
		$req = $bdd -> prepare('
				SELECT COUNT(*)
				FROM Commentaire
				WHERE id_client = (SELECT id FROM Client WHERE pseudo = ?) AS lecteur
				GROUP BY id_article
			');
		$req -> execute(array($pseudo));
		return $data = ($req -> rowCount() > 0) ? $req -> fetch() : 0;
	} else {
		$req = $bdd -> prepare('
				SELECT COUNT(*)
				FROM Article
				WHERE id_auteur = (SELECT id FROM Auteur WHERE pseudo = ?) AS auteur
			');
		$req -> execute(array($pseudo));
		return $data = ($req -> rowCount() > 0) ? $req -> fetch() : 0;
	}
	
}