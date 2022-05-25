<?php
function compt_tot_ouvrages($compte, $pseudo, $date, $bdd)
{
	if ($compte = "Client") {
		$req = $bdd -> prepare('
				SELECT SUM(Avis.qte*Ouvrage.prix)
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
				SELECT SUM(Avis.qte*Ouvrage.prix)
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