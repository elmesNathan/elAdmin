<?php 
function credit_banque($data_user, $bdd)
{
	$req = $bdd -> prepare("
			INSERT INTO Recharge (id_client, num_client, montant, CDF_Ref, date_recharge, statut) VALUES (?,?,?,?,?,'FALSE')
		");
	
	$req -> execute(array($data_user['id_client'], $data_user['num_client'], $data_user['montant'], $data_user['CDF_Ref'], $data_user['date_recharge']));

	return $data = ($req -> rowCount() > 0) ? TRUE : FALSE;
}