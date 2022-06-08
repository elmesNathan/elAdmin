<?php 
function recharges_non_confirmer($id_client, $bdd)
{
	$req = $bdd -> prepare('
			SELECT date_recharge, CDF_Ref, montant, num_admin
			FROM Recharge
			WHERE id_client = ? AND statut = "FALSE"
			ORDER BY date_recharge ASC
		');
	$req -> execute(array($id_client));
	return $data = ($req -> rowCount() > 0) ? $req -> fetch() : array();
}