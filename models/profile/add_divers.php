<?php 
function add_divers($compte, $data_divers, $pseudo, $bdd)
{
	if ($compte == "Client") {
		foreach ($data_divers as $key => $value) {
			switch ($key) {
				case 'niv_etude':
					if (!empty($value)) {
						$req = $bdd -> prepare('
								UPDATE Client
								SET niv_etude = ?
								WHERE pseudo = ?
							');
						$req -> execute(array($value, $pseudo));
					}	
					break;

				case 'profession':
					if (!empty($value)) {
						$req = $bdd -> prepare('
								UPDATE Client
								SET profession = ?
								WHERE pseudo = ?
							');
						$req -> execute(array($value, $pseudo));
					}	
					break;

				case 'grade':
					if (!empty($value)) {
						$req = $bdd -> prepare('
								UPDATE Client
								SET grade = ?
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
		foreach ($data_divers as $key => $value) {
			switch ($key) {
				case 'niv_etude':
					if (!empty($value)) {
						$req = $bdd -> prepare('
								UPDATE Auteur
								SET niv_etude = ?
								WHERE pseudo = ?
							');
						$req -> execute(array($value, $pseudo));
					}	
					break;

				case 'profession':
					if (!empty($value)) {
						$req = $bdd -> prepare('
								UPDATE Auteur
								SET profession = ?
								WHERE pseudo = ?
							');
						$req -> execute(array($value, $pseudo));
					}	
					break;

				case 'grade':
					if (!empty($value)) {
						$req = $bdd -> prepare('
								UPDATE Auteur
								SET grade = ?
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