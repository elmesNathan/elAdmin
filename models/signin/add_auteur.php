<?php 
function add_auteur($nom, $postnom, $prenom, $sexe, $pseudo, $pass, $bdd)
{
	//Verification du pseudo
	$req = $bdd ->prepare('
			SELECT pseudo
			FROM Auteur
			WHERE pseudo = ?
		');
	$req -> execute(array($pseudo));
	
	if ($req -> rowCount() > 0 ){

		//Statut de la requette
		$message = "Ce pseudo est déjà référencé, utilisez un autre...";
		header("Location:signin.php?message=". $message);

	}else{

		//Enregistrement de l'auteur
		$req = $bdd -> prepare('
				INSERT INTO Auteur (nom, postnom, prenom, sexe, pseudo, pass)
				VALUES (?,?,?,?,?,?)
			');
		
		return $data = ($req -> execute(array($nom, $postnom, $prenom, $sexe, $pseudo, $pass))) ? "Tout c'est bien passé" : "";
	}
}