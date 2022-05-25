<?php
function all_factures($compte, $pseudo, $bdd)
{
	if ($compte = "Client") {
		$req = $bdd -> prepare('
				SELECT Avis.date_cmd AS date_e, SUM(Avis.qte) AS qte, SUM(Avis.qte*Ouvrage.prix) AS tot
				FROM Avis
				INNER JOIN Client
				ON Avis.id_client = Client.id
				WHERE Client.id = (SELECT id FROM Client WHERE pseudo = ?) AS Acheteur
				GROUP BY Avis.date_cmd ASC
			');
		$req -> execute(array($pseudo));
		return $data = ($req -> rowCount() > 0) ? $req -> fetch() : array() ;
	} else {
		$req = $bdd -> prepare('
				SELECT Cmd.date_cmd AS date_e, SUM(Cmd.qte) AS qte, SUM(Cmd.qte*Cmd.prix_uni) AS tot
				FROM (SELECT date_cmd, qte, prix_uni, id_auteur
					  FROM Avis
					  INNER JOIN Ouvrage
					  ON Avis.id_ouvrage = Ouvrage.id
					  ) AS Cmd
				INNER JOIN Auteur
				ON Cmd.id_auteur = Auteur.id 
				WHERE Auteur.id = (SELECT id FROM Auteur WHERE pseudo = ?) AS Vendeur
				GROUP BY Cmd.date_cmd ASC
			');
		$req -> execute(array($pseudo));
		return $data = ($req -> rowCount() > 0) ? $req -> fetch() : array() ;
	}	
}