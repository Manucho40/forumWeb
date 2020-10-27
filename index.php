<?php 
session_start();
include_once "fonction/blog.php";
require_once "fonction/bdd.php";
$bdd = bdd();

$articles = articles();
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
    <link href="fontawesome-free-5.13.0-web/css/all.min.css" rel="stylesheet">
    <script src="jquery-3.5.1.min.js"></script>
    <script src="script.js"></script>

</head>
<style type="text/css">
    article{
        
        background: black;
        color:white;
        
       
        text-align: center;
        
        border: solid 6px #a50400 !important;

        /*Animated property*/
        

        /*Transition*/
        transition: 1s;

    }
    article:hover{
        transform: rotateY(360deg) scale(1.1);
        border-radius: 15px;
        border-color: black !important;
        background-color: #a50400 !important;
    }


</style>
<body>
    <?php include "header.php"; ?>


    <link rel="stylesheet" href="maine.css">
    <div class="container article">
        
            <form method="post" action="index.php">
                <div class="row">
                <div class="col-sm-10">
                    <input type="text" name="query" placeholder="Rechercher un article ..." value="<?php  if(isset($_POST["query"]))echo $_POST["query"] ?>">
                </div>
                <div class="col-sm-2">
                    <input type="submit" value="OK!">
                </div>
            
        </div>
            </form>
        

     



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
                foreach ($articles as $article) :
        ?>
            <div class="col-md-4 col-sm-6">
                <a href="article.php?id=<?= $article["id"]; ?>">
                    <article>
                        
                    <h1 ><?= $article["libelle"]; ?></h1>
                    
                    
                    <h1 ><?= $article["titre"]; ?></h1>
                    <p  style="color: white;"><?= $article["accroche"]; ?>...</p>
                    <p  class="date" style="color: white;">Posté le <time datetime="<?= $article["publication"]; ?> "><?= formatage_date($article["publication"]); ?></time></p>
                    
                </article>
                    
                </a>
                
            </div>

        <?php 
                endforeach;


             ?>
            
            
            
        </div>
        
    </div>
<?php include "footer.php"; ?>
    
</body>
</html>