<?php 


function articles(){
    global $bdd;
    // SELECT id, id_filiere, titre, accroche, publication, image FROM articles
    $articles = $bdd->query(" SELECT filiere.libelle, articles.id, articles.titre, articles.accroche, articles.publication, articles.image FROM filiere,articles where filiere.id=articles.id_filiere  ORDER BY id DESC");
    $articles = $articles->fetchall();
 
    return $articles;


}



function article(){
	global $bdd;
	$id = (int)$_GET["id"];
	$article = $bdd->prepare("SELECT filiere.libelle, membres.pseudo, articles.id, articles.titre, articles.contenu, articles.publication, articles.image FROM filiere, membres, articles WHERE articles.id=? AND filiere.id=articles.id_filiere AND membres.id=articles.id_membre");
	$article->execute([$id]);
	$article = $article->fetch();

	if (empty($article)) {
		header("Location: index.php");
	}else{
		return $article;
	}
}

function mestopics(){
	      
		global $bdd;
		
		    // SELECT id, id_filiere, titre, accroche, publication, image FROM articles
		    $membre = $_SESSION["membre"];
		    $topics = $bdd->prepare(" SELECT filiere.libelle, articles.id, articles.id_membre, articles.titre, articles.accroche, articles.publication, articles.image FROM filiere,articles where filiere.id=articles.id_filiere AND articles.id_membre=?  ORDER BY id DESC");
		    $topics->execute([$membre]);
		    $topics = $topics->fetchall();

		    return $topics;


	
	



}

function formatage_date($publication) {
    $publication = explode(" ", $publication);
    $date = explode("-", $publication[0]);
    $heure = explode(":", $publication[1]);
    
    $mois = ["", "janvier", "février", "mars", "avril", "mai", "juin", "juillet", "août", "septembre", "octobre", "novembre", "décembre"];
    
    $resultat = $date[2] . ' ' . $mois[(int)$date[1]] . ' ' . $date[0] . ' à ' . $heure[0] . 'h' . $heure[1];
    
    return $resultat;
}

function nb_commentaires(){
	global $bdd;

	$id_article =(int)$_GET["id"];

	 $nb_commentaires = $bdd->prepare("SELECT COUNT(*) FROM commentaire WHERE id_article = ?");
	 $nb_commentaires->execute([$id_article]);
	 $nb_commentaires = $nb_commentaires->fetch()[0];
	 return $nb_commentaires;
}



function commentaires(){
	global $bdd;
	$id_article =(int)$_GET["id"];
    $commentaires = $bdd->prepare("SELECT commentaire.*, membres.pseudo FROM commentaire INNER JOIN membres ON commentaire.id_membre = membres.id AND commentaire.id_article = ?");
    $commentaires->execute([$id_article]);

    $commentaires = $commentaires->fetchall();

	return $commentaires;
}



function recherche(){
	global $bdd;

	extract($_POST);
	$recherche = $bdd->prepare("SELECT articles.*, filiere.libelle FROM articles INNER JOIN filiere ON articles.id_filiere = filiere.id WHERE titre LIKE :query OR contenu LIKE :query OR libelle LIKE :query ORDER BY id DESC");
	$recherche->execute([
    "query" => '%' . $query . '%'
	]);

	$recherche = $recherche->fetchall();

	return $recherche;

}


function commentaires_user(){
	global $bdd;

	$commentaires = $bdd->prepare("SELECT commentaire.*, articles.titre FROM commentaire INNER JOIN articles ON commentaire.id_article = articles.id AND commentaire.id_membre = ? ORDER BY id DESC");
	$commentaires->execute([$_SESSION["membre"]]);
	$commentaires = $commentaires->fetchall();

	return $commentaires;
}
 

function commenter(){

	 if (isset($_SESSION["membre"])) {
  	global $bdd;

	$erreur = "";

	extract($_POST);


	if (!empty($commentaire)){
		$id_article = (int)$_GET["id"];
		$commenter = $bdd->prepare("INSERT INTO commentaire(id_membre, id_article, commentaire) VALUES(:id_membre, :id_article, :commentaire)");
		$commenter->execute([
			"id_membre" => $_SESSION["membre"],
			"id_article" => $id_article,
			"commentaire" => nl2br(htmlentities($commentaire))


		]);
		header("Location: article.php?id=" . $id_article);
	}else{
		$erreur .= "Vous devez écrire du texte!";

		return $erreur;
	}
  }
  }

  

  
	
