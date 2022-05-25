<?php
function all_lignes_facture($compte, $pseudo, $date, $bdd)
{
	if ($compte = "Client") {
		$req = $bdd -> prepare('
				SELECT Ouvrage.date_cmd AS date_e, Ouvrage.titre, Ouvrage.type, Avis.qte, Ouvrage.prix AS prix_unit, (Avis.qte*Ouvrage.prix) AS tot
				FROM Avis
				INNER JOIN Ouvrage
				ON Avis.id_ouvrage = Ouvrage.id
				WHERE Avis.id_client = (SELECT id FROM Client WHERE pseudo = ?)
				GROUP BY Avis.date_cmd ASC
				HAVING Avis.date_cmd = ?
			');
		$req -> execute(array($pseudo, $date));
		return $data = ($req -> rowCount() > 0) ? $req -> fetch() : array() ;
	} else {
		$req = $bdd -> prepare('
				SELECT Ouvrage.date_cmd AS date_e, Ouvrage.titre, Ouvrage.type, Avis.qte, Ouvrage.prix AS prix_unit, (Avis.qte*Ouvrage.prix) AS tot
				FROM Avis
				INNER JOIN Ouvrage
				ON Avis.id_ouvrage = Ouvrage.id
				WHERE Ouvrage.id_auteur = (SELECT id FROM Auteur WHERE pseudo = ?)
				GROUP BY Avis.date_cmd ASC
				HAVING Avis.date_cmd = ?
			');
		$req -> execute(array($pseudo, $date));
		return $data = ($req -> rowCount() > 0) ? $req -> fetch() : array() ;
	}	
}