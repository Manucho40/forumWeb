<?php 

$bdd = new PDO("mysql:dbname=blog;host=localhost", "root", "");




$task = 'list';

if (array_key_exists('task', $_GET)) {
    $task = $_GET['task'];
}

if ($task == "write") {
 postMessage(); 
}else{
    getMessage();
}

function getMessage(){
    
    global $bdd;
	$id_article =(int)$_GET["id"];
    $commentaires = $bdd->prepare("SELECT commentaire.*, membres.pseudo FROM commentaire INNER JOIN membres ON commentaire.id_membre = membres.id AND commentaire.id_article = ?");
    $commentaires->execute([$id_article]);

    $commentaires = $commentaires->fetchall();


    echo json_encode($commentaires);
}

function postMessage(){
    if (isset($_SESSION["membre"])) {
        global $bdd;
  
      $erreur = "";
  
      extract($_POST);
          
  
      if (!empty($commentaire)){
          $id_article = (int)$_GET["id"];
          $statu = "unread";
          $commenter = $bdd->prepare("INSERT INTO commentaire(id_membre, id_article, commentaire, statu) VALUES(:id_membre, :id_article, :commentaire, :statu)");
          $commenter->execute([
              "id_membre" => $_SESSION["membre"],
              "id_article" => $id_article,
              "commentaire" => nl2br(htmlentities($commentaire)),
              "statu" => $statu
  
          ]);

          echo json_encode(["status" => "success"]);
      }else{
          $erreur .= "Vous devez écrire du texte!";
  
          return $erreur;
      }
    }
}