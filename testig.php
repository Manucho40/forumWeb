<?php 
session_start();
if (!isset($_SESSION["membre"])){
    header("Location: connexion.php");
}
  
include_once "fonction/membre.php";
include_once "fonction/blog.php";
require_once "fonction/bdd.php";
$bdd = bdd();
$infos = infos();
$commentaires = commentaires_user();
            
 ?>


<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Infoprog - Compte</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:400,300,700">
    <link rel="stylesheet" href="main.css">
    <script src="jquery-3.5.1.min.js"></script>
</head>
<body>
    <?php include "header.php"; ?>
    <div class="container commentaires">
        <div class="row">
            <div class="col-xs-12">
                <h1>Bienvenue <?= $infos["pseudo"] ?> !</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12">
                <p>Adresse e-mail : <?= $infos["email"] ?></p>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12">
                <h1>Derniers commentaires !</h1>
            </div>
        </div>

        <?php 
            foreach ($commentaires as $commentaire) :
               
         ?>
        <div class="row commentaire">
            <div class="col-xs-12">
                <p class="date">Posté sur l'article "<?= $commentaire["titre"];?>" le 
                    <time datetime="<?= $commentaire["publication"];   ?>">
                    <?=formatage_date($commentaire["publication"]);?>"
                        
                    </time> :</p>
                <p><?= $commentaire["commentaire"];   ?></p>
            </div>
        </div>
         <?php 
            endforeach;
          ?>
        <footer>
            <div class="row">
                <div class="col-xs-12">
                    <a href="contact.php">Contact</a> - <a href="mentions.php">Mentions légales</a> - <a href="https://www.facebook.com/infoprog.tuto">Facebook</a>
                </div>
            </div>
        </footer>
    </div>
</body>
</html>