<?php 
function add_perso($compte, $data_perso, $pseudo, $bdd)
{
	if ($compte == "Client") {
		foreach ($data_perso as $key => $value) {
			switch ($key) {
				case 'prenom':
					if (!empty($value)) {
						$req = $bdd -> prepare('
								UPDATE Client
								SET prenom = ?
								WHERE pseudo = ?
							');
						$req -> execute(array($$value, $pseudo));
					}	
					break;

				case 'nom':
					if (!empty($value)) {
						$req = $bdd -> prepare('
								UPDATE Client
								SET nom = ?
								WHERE pseudo = ?
							');
						$req -> execute(array($value, $pseudo));
					}	
					break;

				case 'postnom':
					if (!empty($value)) {
						$req = $bdd -> prepare('
								UPDATE Client
								SET postnom = ?
								WHERE pseudo = ?
							');
						$req -> execute(array($value, $pseudo));
					}	
					break;

				case 'sexe':
					if (!empty($value)) {
						$req = $bdd -> prepare('
								UPDATE Client
								SET sexe = ?
								WHERE pseudo = ?
							');
						$req -> execute(array($value, $pseudo));
					}	
					break; 

				case 'date_naiss':
					if (!empty($value)) {
						$req = $bdd -> prepare('
								UPDATE Client
								SET date_naiss = ?
								WHERE pseudo = ?
							');
						$req -> execute(array($value, $pseudo));
					}	
					break;

				case 'nationalite':
					if (!empty($value)) {
						$req = $bdd -> prepare('
								UPDATE Client
								SET nationalite = ?
								WHERE pseudo = ?
							');
						$req -> execute(array($value, $pseudo));
					}	
					break;

				case 'description':
					if (!empty($value)) {
						$req = $bdd -> prepare('
								UPDATE Client
								SET description = ?
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
		foreach ($data_perso as $key => $value) {
			switch ($key) {
				case 'prenom':
					if (!empty($value)) {
						$req = $bdd -> prepare('
								UPDATE Auteur
								SET prenom = ?
								WHERE pseudo = ?
							');
						$req -> execute(array($$value, $pseudo));
					}	
					break;

				case 'nom':
					if (!empty($value)) {
						$req = $bdd -> prepare('
								UPDATE Auteur
								SET nom = ?
								WHERE pseudo = ?
							');
						$req -> execute(array($value, $pseudo));
					}	
					break;

				case 'postnom':
					if (!empty($value)) {
						$req = $bdd -> prepare('
								UPDATE Auteur
								SET postnom = ?
								WHERE pseudo = ?
							');
						$req -> execute(array($value, $pseudo));
					}	
					break;

				case 'sexe':
					if (!empty($value)) {
						$req = $bdd -> prepare('
								UPDATE Auteur
								SET sexe = ?
								WHERE pseudo = ?
							');
						$req -> execute(array($value, $pseudo));
					}	
					break; 

				case 'date_naiss':
					if (!empty($value)) {
						$req = $bdd -> prepare('
								UPDATE Auteur
								SET date_naiss = ?
								WHERE pseudo = ?
							');
						$req -> execute(array($value, $pseudo));
					}	
					break;

				case 'nationalite':
					if (!empty($value)) {
						$req = $bdd -> prepare('
								UPDATE Client
								SET nationalite = ?
								WHERE pseudo = ?
							');
						$req -> execute(array($value, $pseudo));
					}	
					break;

				case 'description':
					if (!empty($value)) {
						$req = $bdd -> prepare('
								UPDATE Auteur
								SET description = ?
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