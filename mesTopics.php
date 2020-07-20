<?php 
session_start();

include_once "fonction/blog.php";
require_once "fonction/bdd.php";
$bdd = bdd();

$mestopics = mestopics();
if (!empty($_POST)) {
   $articles = recherche();
}else{
    $articles = articles();
}


 ?>




 <!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Infoprog - Accueil</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:400,300,700">
    <link rel="stylesheet" href="maine.css">
    <script src="jquery-3.5.1.min.js"></script>
</head>
<body>
    <?php include "header.php"; ?>
    <div class="container article">
        
            <form method="post" action="index.php">
            	<div class="row">
                <div class="col-sm-10">
                    <input type="text" name="query" placeholder="Rechercher un article ..." value="<?php  if(isset($_POST["query"]))echo $_POST["query"] ?>">
                </div>
                <div class="col-sm-2">
                    <input type="submit" value="OK!">
                    </form>
                </div>
            
        </div>
        <?php 
        if(isset($_POST["query"])):
        ?>
        <div class="row">
            <div class="col-xs-12">
                <h1>Résultat de votre recherche avec "<?= $_POST["query"] ?>"</h1>
            </div>
        </div>
        <?php 
        endif;  
         ?>
        <div class="row">
            <?php 
                foreach ($mestopics as $topics) :
        ?>
            <div class="col-md-4 col-sm-6">
                <article>
                    <h1><?= $topics["libelle"] ?></h1>
                    <img src="img/<?= $topics["image"]; ?>" alt="<?= $topics["image"]; ?>">
                    <p class="date">Posté le <time datetime="<?= $topics["publication"]; ?>"><?= formatage_date($topics["publication"]); ?></time></p>
                    <h1><?= $topics["titre"]; ?></h1>
                    <p><?= $topics["accroche"]; ?>...</p>
                    <a href="article.php?id=<?= $topics["id"]; ?>">Lire l'article</a>
                </article>
            </div>

        <?php 
                endforeach;


             ?>
            
            
            
        </div>
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