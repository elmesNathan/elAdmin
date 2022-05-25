<?php 
function last_articles($id_article, $bdd)
{
	$req = $bdd -> prepare('
			SELECT Article.id, Article.couverture, Article.titre, Article.date_pub, Article.problematique
			, Auteur.prenom, Auteur.nom, Auteur.postnom
			FROM Article
			WHERE Article.id = ?
		');
	$req -> execute(array($id_article)); 
	return $data = ($req -> rowCount() > 0) ? $req -> fetch() : FALSE;
}