<?php 

if (!function_exists('set_flash')) {
    function set_flash($message, $type = 'info'){
        $_SESSION['notification']['message'] = $message;
        $_SESSION['notification']['type'] = $type;
    }
}
if (!function_exists('is_already_in_use')) {
    function is_already_in_use($field, $value, $table){
        global $bdd;

        $q = $bdd->prepare("SELECT id FROM $table WHERE $field = ?");
        $q->execute([$value]);

        $count = $q->rowCount();

        $q->closeCursor();

        return $count;
    }
}

if (!function_exists('redirect')) {
    function redirect($page){
        header('Location: ' . $page);
                exit();
    }
}

function inscription(){
	global $bdd;
	extract($_POST);

	$validation = true;
	$erreur = [];
	if (empty($pseudo) || empty($nom) || empty($prenom) || empty($email)  || empty($password) || empty($passwordconf)) {
		 $validation = false;
		 $erreur[] = "Tous les champs sont obligatoires";
	}

	if(existe($pseudo)){
		$validation = false;
		$erreur[] = "Ce pseudo est dejà pris";
	}
	// if(existeMail($email)){
	// 	$validation = false;
	// 	$erreur[] = "Ce mail est dejà pris";
	// }
	

	if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
		$validation = false;
		$erreur[] = "L'adresse e-mail n'est pas valide";
	}
	

	if ($passwordconf != $password) {
		$validation = false;
		$erreur[] = "Le mot de passe de confirmation est incorrecte";
	}

	if($validation) {
		

       
		
        $to = $email;
		$subject = "http://localhost:8081". " - ACTIVATION DE COMPTE";
		
		$cle = md5(microtime(TRUE)*100000);

		ob_start();
		require('email/activation.tmpl.php');
		$content = ob_get_clean();

		$headers = 'MIME-Version: 1.0' . "\r\n";
        $headers .= 'Content-type: text/html; charset=iso-8859' . "\r\n";

		mail($to, $subject, $content, $headers);
		
		set_flash("Mail d'activation envoyer", 'success');

		$inscription = $bdd->prepare("INSERT INTO membres(pseudo, nom, prenom, email, cle, password) VALUES(:pseudo, :nom, :prenom, :email, :cle, :password)");
        $inscription->execute([
			"pseudo" => htmlentities($pseudo),
			"nom" => htmlentities($nom),
			"prenom" => htmlentities($prenom),
			"email" => htmlentities($email),
			"cle" => htmlentities($cle),
            "password" => password_hash($password, PASSWORD_DEFAULT)
        ]);
        
		unset($_POST["pseudo"]);
		unset($_POST["nom"]);
		unset($_POST["prenom"]);
		unset($_POST["email"]);
		unset($_POST["cle"]);

		
		redirect('index.php');
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
function existeMail($email){
	global $bdd;

	$resultat = $bdd->prepare("SELECT COUNT(*) FROM membres WHERE email = ?");
	$resultat->execute([$email]);
	$resultat = $resultat->fetch()[0];
	return $resultat;
} 

function connexion() {
    global $bdd;
    
	extract($_POST);
    


	$connexion = $bdd->prepare("SELECT id, password FROM membres WHERE pseudo = ?");
    $connexion->execute([$pseudo]);
    $connexion = $connexion->fetch();
    
    if(password_verify($password, $connexion["password"])) {

		$stmt = $bdd->prepare("SELECT active FROM membres WHERE pseudo like :pseudo ");
		if($stmt->execute(array(':pseudo' => $pseudo)) && $row = $stmt->fetch())
		{
		$actif = $row['active']; // $actif contiendra alors 0 ou 1
		}
		// Il ne nous reste plus qu'à tester la valeur du champ 'actif' pour
		// autoriser ou non le membre à se connecter
		if($actif == '1') // Si $actif est égal à 1, on autorise la connexion
		{
		//...
		// On autorise la connexion...
		//...
		$_SESSION["membre"] = $connexion["id"];
		header("Location: compte.php");


		}
		else // Sinon la connexion est refusé...
		{
		//...
		// On refuse la connexion et/ou on prévient que ce compte n'est pas activé
		//...
			$erreur = "Votre comptes n'est pas actif";
			return $erreur;

		}










         
    } else
	$erreur = "Vos identifiants sont incorrectes";
	return $erreur;







	
	




















    
  
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

