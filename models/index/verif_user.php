<?php 
function verif_user($compte, $pseudo, $pass, $bdd)
{
	if ($compte == "Client") {
		$req = $bdd -> prepare('
				SELECT id 
				FROM Client
				WHERE pseudo = ? AND pass = ?
			');
		$req -> execute(array($pseudo, $pass));
		
	} else {
		$req = $bdd -> prepare('
				SELECT id 
				FROM Auteur
				WHERE pseudo = ? AND pass = ?
			');
		$req -> execute(array($pseudo, $pass));
	}
	
	return $data = ($req -> rowCount() > 0) ? TRUE : FALSE ;
}