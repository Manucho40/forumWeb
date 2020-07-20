<?php 

function liste(){
    global $bdd;
    $liste = $bdd->query("SELECT id, libelle FROM filiere ORDER BY id ASC");
    $liste = $liste->fetchall();

    return $liste;
}


function poster() {
   

        global $bdd;
    
    extract($_POST);
    
    $validation = true;
    $erreurs = [];
    
    if(empty($titre) || empty($contenu)) {
        $validation = false;
        $erreurs[] = "Tous les champs sont obligatoires";
    }
    
    
        if($validation) {
        $image = basename($_FILES["file"]["name"]);
        $id_membre = $_SESSION["membre"];
        
        move_uploaded_file($_FILES["file"]["tmp_name"], 'img/' . $image);
       
        // INSERT INTO articles(titre, accroche, contenu, image) VALUES(:titre, :accroche, :contenu, :image)
        $poster = $bdd->prepare("INSERT INTO articles( id_filiere, id_membre, titre, accroche, contenu, image)  VALUES(:id_filiere, :id_membre, :titre, :accroche, :contenu, :image)");
        $poster->execute([
            "id_filiere" => $filiere,
            "id_membre" => $id_membre,
            "titre" => htmlentities($titre),
            "accroche" => substr(htmlentities($contenu), 0, 200),
            "contenu" => nl2br(htmlentities($contenu)),
            "image" => htmlentities($image)
            
        ]);
        
        unset($_POST["titre"]);
        unset($_POST["contenu"]);
    }
    
    return $erreurs;


   
    

    
}
function supcompte(){

    global $bdd;

    $compte = $bdd->query("SELECT id, pseudo FROM membres ORDER BY id DESC");
    $compte = $compte->fetchAll();
    return $compte;
}

function posts(){

	global $bdd;
    $membre = $_SESSION["membre"];
	$posts = $bdd->prepare("SELECT id, titre, id_membre FROM articles WHERE id_membre=? ORDER BY id DESC");
    $posts->execute([$membre]);
	$posts = $posts->fetchAll();
	return $posts;
}


function post(){
 global $bdd;
    
    $id = (int)$_GET["id"];
    
    $post = $bdd->prepare("SELECT titre, contenu FROM articles WHERE id = ?");
    $post->execute([$id]);
    $post = $post->fetch();
    
    return $post;
}

function supprimerMembre(){
      global $bdd;
    
    $id = (int)$_GET["id"];
    
    $supprimer = $bdd->prepare("DELETE FROM membres WHERE id = ?");
    $supprimer->execute([$id]);

}




function supprimer(){
	  global $bdd;
    
    $id = (int)$_GET["id"];
    
    $image = $bdd->prepare("SELECT image FROM articles WHERE id = ?");
    $image->execute([$id]);
    $image = $image->fetch()["image"];
    
    unlink('img/' . $image);
    
    $supprimer = $bdd->prepare("DELETE FROM articles WHERE id = ?");
    $supprimer->execute([$id]);

}

function modifier(){
	 global $bdd;
    
    $erreur = "";
    
    extract($_POST);
    
    $id = (int)$_GET["id"];

    if(!empty($titre) AND !empty($contenu)) {
        $modifier = $bdd->prepare("UPDATE articles SET titre = :titre, accroche = :accroche, contenu = :contenu WHERE id = :id");
        $modifier->execute([
            "titre" => htmlentities($titre),
            "accroche" => substr(htmlentities($contenu), 0, 200),
            "contenu" => nl2br(htmlentities($contenu)),
            "id" => $id
        ]);

        header("Location: posts.php");
    }
    else
        $erreur .= "Les champs doivent contenir quelque chose";
        
    return $erreur;

}