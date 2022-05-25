<?php 
function add_contact($compte, $data_contact, $pseudo, $bdd)
{
	if ($compte == "Client") {
		foreach ($data_contact as $key => $value) {
			switch ($key) {
				case 'telephone':
					if (!empty($value)) {
						$req = $bdd -> prepare('
								UPDATE Client
								SET telephone = ?
								WHERE pseudo = ?
							');
						$req -> execute(array($value, $pseudo));
					}	
					break;

				case 'email':
					if (!empty($value)) {
						$req = $bdd -> prepare('
								UPDATE Client
								SET email = ?
								WHERE pseudo = ?
							');
						$req -> execute(array($value, $pseudo));
					}	
					break;

				case 'address':
					if (!empty($value)) {
						$req = $bdd -> prepare('
								UPDATE Client
								SET address = ?
								WHERE pseudo = ?
							');
						$req -> execute(array($value, $pseudo));
					}	
					break;

				default:
					return TRUE;
					break;
			}
		}
		return $data = ($req -> rowCount() > 0) ? TRUE : FALSE ;
	} else {
		foreach ($data_contact as $key => $value) {
			switch ($key) {
				case 'telephone':
					if (!empty($value)) {
						$req = $bdd -> prepare('
								UPDATE Auteur
								SET telephone = ?
								WHERE pseudo = ?
							');
						$req -> execute(array($value, $pseudo));
					}	
					break;

				case 'email':
					if (!empty($value)) {
						$req = $bdd -> prepare('
								UPDATE Auteur
								SET email = ?
								WHERE pseudo = ?
							');
						$req -> execute(array($value, $pseudo));
					}	
					break;

				case 'address':
					if (!empty($value)) {
						$req = $bdd -> prepare('
								UPDATE Auteur
								SET address = ?
								WHERE pseudo = ?
							');
						$req -> execute(array($value, $pseudo));
					}	
					break;

				default:
					return TRUE;
					break;
			}
		}
		return $data = ($req -> rowCount() > 0) ? TRUE : FALSE ;
	}
}