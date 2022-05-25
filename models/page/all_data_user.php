<?php 
function all_data_user($compte, $pseudo, $bdd)
{
	if ($compte == "Client") {
		$req = $bdd -> prepare('
				SELECT * 
				FROM Client
				WHERE pseudo = ?
			');
		$req -> execute(array($pseudo));
		return $data = ($req -> rowCount() > 0) ? $req -> fetch() : NULL ;
	} else {
		$req = $bdd -> prepare('
				SELECT *
				FROM Auteur
				WHERE pseudo = ?
			');
		$req -> execute(array($pseudo));
		return $data = ($req -> rowCount() > 0) ? $req -> fetch() : NULL ;
	}
}