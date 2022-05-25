<?php 
function add_avatar($compte, $path_avatar, $pseudo, $bdd)
{
	if ($compte == "Client") {
		$req = $bdd -> prepare('
				UPDATE Client
				SET avatar = ?
				WHERE pseudo = ?
			');
		$req -> execute(array($path_avatar, $pseudo));

		return $data = ($req) ? TRUE : FALSE;
	} else {
		$req = $bdd -> prepare('
				UPDATE Auteur
				SET avatar = ?
				WHERE pseudo = ?
			');
		$req -> execute(array($path_avatar, $pseudo));

		return $data = ($req) ? TRUE : FALSE;
	}
	
}