<?php 
function nbre_inbox($compte, $pseudo, $bdd)
{
	if($compte == "Client"){

		$req = $bdd -> prepare('
			SELECT COUNT(*) AS en_cours
			FROM Recharge
			WHERE id_client = (SELECT id FROM Client WHERE pseudo = ?)
			GROUP BY statut
			HAVING statut = "FALSE"
			');
		$req -> execute(array($pseudo));

		return $data = ($req -> rowCount() > 0) ? $req -> fetch()['en_cours'] : 0;

	}elseif ($pseudo == "admin") {

		$recharges = $bdd -> query('
			SELECT COUNT(*) AS en_cours
			FROM Recharge
			GROUP BY statut
			HAVING statut = "FALSE"
			');

		$data_recharges = ($recharges -> rowCount() > 0) ? $recharges -> fetch()['en_cours'] : 0;

		$paiements = $bdd -> query('
			SELECT COUNT(*) AS en_cours
			FROM Paiement
			GROUP BY statut
			HAVING statut = "FALSE"
			');

		$data_paiements = ($paiements -> rowCount() > 0) ? $paiements -> fetch()['en_cours'] : 0;

		return $data = intval($data_recharges) + intval($data_paiements);
	}else{

		$req = $bdd -> prepare('
			SELECT COUNT(*) AS en_cours
			FROM Paiement
			WHERE id_auteur = (SELECT id FROM Auteur WHERE pseudo = ?)
			GROUP BY statut
			HAVING statut = "FALSE"
			');
		$req -> execute(array($pseudo));

		return $data = ($req -> rowCount() > 0) ? $req -> fetch()['en_cours'] : 0;

	}
}