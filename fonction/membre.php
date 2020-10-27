<?php 
function inscription(){
	global $bdd;
	extract($_POST);

	$validation = true;
	$erreur = [];
	if (empty($pseudo) || empty($nom) || empty($prenom) || empty($email)  || empty($password) || empty($passwordconf)) {
		 $validation = false;
		 $erreur[] = "Tous les champs sont obligatoires";
	}

	if(existe($pseudo )){
		$validation = false;
		$erreur[] = "Ce pseudo est dejà pris";
	}
	
	
		

	

	if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
		$validation = false;
		$erreur[] = "L'adresse e-mail n'est pas valide";
	}
	

	if ($passwordconf != $password) {
		$validation = false;
		$erreur[] = "Le mot de passe de confirmation est incorrecte";
	}

	if($validation) {
        $inscription = $bdd->prepare("INSERT INTO membres(pseudo, nom, prenom, email, password) VALUES(:pseudo, :nom, :prenom, :email, :password)");
        $inscription->execute([
			"pseudo" => htmlentities($pseudo),
			"nom" => htmlentities($nom),
			"prenom" => htmlentities($prenom),
            "email" => htmlentities($email),
            "password" => password_hash($password, PASSWORD_DEFAULT)
        ]);
        
		unset($_POST["pseudo"]);
		unset($_POST["nom"]);
		unset($_POST["prenom"]);
        unset($_POST["email"]);
        
    }
    
    return $erreur;
}



function existe($pseudo){
	global $bdd;

	$resultat = $bdd->prepare("SELECT COUNT(*) FROM membres WHERE pseudo = ?");
	$resultat->execute([$pseudo]);
	$resultat = $resultat->fetch()[0];
	return $resultat;
} 

function connexion(){
	global $bdd;

	extract($_POST);
   $erreur = "Les identifiants sont erronés";
   $connexion = $bdd->prepare("SELECT id, password FROM membres WHERE pseudo = ?");
   $connexion->execute([$pseudo]);
   $connexion =$connexion->fetch();

   if (password_verify($password, $connexion["password"])) {
   	$_SESSION["membre"] = $connexion["id"];
   	header("Location: compte.php");
   }else{
   	return $erreur;
   }
}

function deconnexion(){
	unset($_SESSION["membre"]);
	session_destroy();
	header("Location: connexion.php");
}


function infos(){
	global $bdd;

	$membre = $bdd->prepare("SELECT membres.* FROM membres WHERE id = ?");
	
	$membre->execute([$_SESSION["membre"]]);
	$membre = $membre->fetch();

	return $membre;
}

