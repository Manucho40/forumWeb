<?php 
session_start();
include_once "fonction/blog.php";
require_once "fonction/bdd.php";
$bdd = bdd();
$article = article();
$nb_commentaire = nb_commentaires();
$commentaires = commentaires();
if (!empty($_POST)) {
    $erreur = commenter();
}
 ?>





<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Infoprog - Article</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:400,300,700">
    <link rel="stylesheet" href="maine.css">
    <script src="jquery-3.5.1.min.js"></script>
</head>
<body>
    <?php include "header.php" ?>
    <div class="container article">
        <form method="post" action="index.php">
        <div class="row">
            
                <div class="col-sm-10">
<input type="text" name="query" placeholder="Rechercher un article ..." value="">
                </div>
                <div class="col-sm-2">
                    <input type="submit" value="OK!">
                </div>
           
        </div>
         </form>
        <div class="row">
            <article>
                <div class="col-sm-12">
                    <h1><?= $article["libelle"] ?> - <?= $article["pseudo"] ?></h1>

                </div>
                <div class="col-sm-5">
                    <img src="img/<?=$article["image"]; ?>" alt="<?=$article["image"] ?>">
                </div>
                <div class="col-sm-7">
                    <p class="date">Posté le <time datetime="<?= $article["publication"] ?>"><?= formatage_date($article["publication"]) ?></time></p>
                    <h1><?= $article["titre"] ?></h1>
                    <p  style="color: black; font-size: 20px;" ><?= $article["contenu"] ?></p>
                </div>
            </article>
        </div>
    </div>
    <div class="container commentaires">
        <div class="row">
            <div class="col-xs-12">
                <h1>Commentaires (<?=$nb_commentaire ?>)</h1>
            </div>
        </div>
        <?php 
            foreach ($commentaires as $commentaire) :
         ?>
        <div class="row commentaire">
            <div class="col-xs-12">
                <p class="date">Posté par <?=$commentaire["pseudo"]; ?> le <time datetime="<?=$commentaire["publication"]; ?>"><?=formatage_date($commentaire["publication"]) ?></time> :</p>
                <p style="color: black;  font-weight: bold;"><?=$commentaire["commentaire"]; ?></p>
            </div>
        </div>
        <?php 
          endforeach;
          if (isset($_SESSION["membre"])):
            
        ?>
        <div class="row">
            <div class="col-xs-12">
                <form method="post" action="">
                    <?php 
            if(isset($erreur)):
                if ($erreur) :
            ?>
            <div class="row">
                <div class="col-xs-12">
                    <div class="message erreur"><?= $erreur ?></div>
                </div>
            </div>
            <?php 
                
                else : 

             ?>
            <div class="row">
                <div class="col-xs-12">
                    <div class="message confirmation">Votre commentaire a bien été posté !</div>
                </div>
            </div>

            <?php
                endif; 
                endif;

             ?>
                    <textarea name="commentaire" placeholder="Votre commentaire *"></textarea>
                    <input type="submit" value="Commenter">
                </form>
            </div>
        </div>
        <?php 
            endif;
         ?>
        
    </div>
    <?php include "footer.php"; ?>
</body>
</html>