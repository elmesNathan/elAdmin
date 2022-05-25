<?php 
//Model(s)
include_once 'models/page/all_data_user.php';
include_once 'models/profile/add_avatar.php';
include_once 'models/profile/add_perso.php';
include_once 'models/profile/add_contact.php';
include_once 'models/profile/add_divers.php';

//TRAITEMENT DE LA PAGE
$compte = $_SESSION['compte'];
$pseudo = $_SESSION['pseudo'];

//Récupération des données de l'utilisateur
$data = all_data_user($compte, $pseudo, $bdd);
foreach ($data as $key => $value) {
	$data_user[$key] = $value;
}

//Récupération des données du menu
include_once 'controleurs/notif_banque.php';

//Récupération des données du profils utilisateur
if (isset($_POST['valider2'])){
	foreach ($_POST as $key => $value) {
		switch ($key) {
			case 'telephone':
				$data_contact[$key] = htmlspecialchars($value);
				break;

			case 'email':
				$data_contact[$key] = htmlspecialchars($value);
				break;

			case 'address':
				$data_contact[$key] = htmlspecialchars($value);
				break;

			default:
				if (add_contact($compte, $data_contact, $pseudo, $bdd)) {
					header("Location:profile.php");
				} else {
					$message2 = "Une erreur information est incorrecte";
					header("Location:profile.php?message2=$message2");
				}
				break;
		}
	} 
} elseif (isset($_POST['valider3'])) {
	foreach ($_POST as $key => $value) {
		switch ($key) {
			case 'niv_etude':
				$data_div[$key] = htmlspecialchars($value);
				break;

			case 'profession':
				$data_div[$key] = htmlspecialchars($value);
				break;

			case 'grade':
				$data_div[$key] = htmlspecialchars($value);
				break;

			default:
				if (add_divers($compte, $data_div, $pseudo, $bdd)) {
					header("Location:profile.php");
				} else {
					$message3 = "Une erreur information est incorrecte";
					header("Location:profile.php?message3=$message2");
				}
				break;
		}
	}
} elseif (isset($_POST['valider1'])) {
	foreach ($_POST as $key => $value) {
		switch ($key) {
			case 'prenom':
				$data_perso[$key] = htmlspecialchars($value);
				break;

			case 'nom':
				$data_perso[$key] = htmlspecialchars($value);
				break;

			case 'postnom':
				$data_perso[$key] = htmlspecialchars($value);
				break;

			case 'sexe':
				$data_perso[$key] = htmlspecialchars($value);
				break; 

			case 'date_naiss':
				$data_perso[$key] = htmlspecialchars($value);
				break;

			case 'nationalite':
				$data_perso[$key] = htmlspecialchars($value);
				break;

			case 'description':
				$data_perso[$key] = nl2br(htmlspecialchars($value));
				break;
			
			default:
				if (add_perso($compte, $data_perso, $pseudo, $bdd)) {
					header("Location:profile.php");
				} else {
					$message = "Une erreur information est incorrecte";
					header("Location:profile.php?message=$message");
				}
				
				break;
		}
	}

	//Enregistrement de l'avatar user
	if (isset($_FILES['avatar']) AND $_FILES['avatar']['error'] == 0) {
		$path_avatar = 'vues/assets/img/avatars/' . $compte . '_' . $pseudo;

		if ($_FILES['avatar']['size'] <= 100000) {
			$infosfichier = pathinfo($_FILES['avatar']['name']);
			$ext_upload = $infosfichier['extension'];
			$ext_autorisees = array('jpg', 'jpeg');

			if (in_array($ext_upload, $ext_autorisees)) {

				if(move_uploaded_file($_FILES['avatar']['tmp_name'], $path_avatar)){

					if (add_avatar($compte, $path_avatar, $pseudo, $bdd)) {
						header("Location:dashboard.php");
					} else {
						$message = "L'avatar n'a pas été stocker dans la base de données...";
						header("Location:profile.php?message=$message");
					}

				}else{
					$message = "L'avatar n'a pas été stocker, une erreur produit lors du stockage";
					header("Location:profile.php?message=$message");
				}

			} else{
				$message = "L'avatar doit être du type jpg ou jpeg";
				header("Location:profile.php?message=$message");
			}
		
		} else {
			$message = "L'avatar ne doit pas dépasser 100ko";
			header("Location:profile.php?message=$message");
		}
	}
}


//Appel de la vue
include_once 'vues/profile/profile.php';