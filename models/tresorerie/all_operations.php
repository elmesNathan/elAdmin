<?php
function all_operations($compte, $pseudo, $bdd)
{
	if ($compte = "Client") {
		$req = $bdd -> prepare('
				SELECT Ouvrage.titre, Ouvrage.type, Avis.qte, Ouvrage.prix AS prix_unit, (Avis.qte*Ouvrage.prix) AS tot
				FROM Avis
				INNER JOIN Ouvrage
				ON Avis.id_ouvrage = Ouvrage.id
				WHERE Avis.id_client = (SELECT id FROM Client WHERE pseudo = ?)
				ORDER BY Avis.date_cmd ASC
			');
		$req -> execute(array($pseudo));
		return $data = ($req -> rowCount() > 0) ? $req -> fetch() : array() ;
	} else {
		$req = $bdd -> prepare('
				SELECT Ouvrage.titre, Ouvrage.type, Avis.qte, Ouvrage.prix AS prix_unit, (Avis.qte*Ouvrage.prix) AS tot
				FROM Avis
				INNER JOIN Ouvrage
				ON Avis.id_ouvrage = Ouvrage.id
				WHERE Ouvrage.id_client = (SELECT id FROM Auteur WHERE pseudo = ?)
				ORDER BY Avis.date_cmd ASC
			');
		$req -> execute(array($pseudo));
		return $data = ($req -> rowCount() > 0) ? $req -> fetch() : array() ;
	}	
}