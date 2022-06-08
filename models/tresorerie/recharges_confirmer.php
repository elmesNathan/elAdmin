<?php 
function recharge_non_confirme($id_client, $bdd)
{
	$req = $bdd -> prepare('
			SELECT date_recharge, CDF_Ref, montant, num_client
			FROM Recharge
			WHERE id_client = ? AND statu = "TRUE"
			ORDER BY date_recharge ASC
		');
	$req -> execute(array($id_client));
	return $data = ($req -> rowCount() > 0) ? $req -> fetch() : array();
}