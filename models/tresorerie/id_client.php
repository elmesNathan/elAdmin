<?php 
function id_client($pseudo, $bdd)
{
	$req = $bdd -> prepare('
			SELECT id 
			FROM Client 
			WHERE pseudo = ?
		');	
	$req -> execute(array($pseudo));
	return $data = ($req -> rowCount() > 0) ? $req -> fetch()['id'] : NULL;
}