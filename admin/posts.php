<?php 
include_once "../fonction/admin.php";
require_once "../fonction/bdd.php";
$bdd = bdd();

$supcomptes = supcompte();



 ?>




<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Infoprog Admin - Posts</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:400,300,700">
    <link rel="stylesheet" href="../main.css">
</head>
<body>
    <header>
        <div class="container">
            <div class="row">
                <div class="col-sm-3">
                    <a href="index.php">infoprog - admin</a>
                </div>
                <div class="col-sm-9">
                    <nav>
                        <ul>
                            <li><a href="index.php">Nouveau post</a></li>
                            <li><a href="posts.php">Anciens posts</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <h1>Anciens posts !</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12">
                <table>
                    <?php 
                        foreach ($supcomptes as $membre) :
                          
                     ?>
                    <tr>
                        <td><?= $membre["pseudo"] ?></td>
                        
                        <td><a href="supprimer.php?id=<?= $membre["id"] ?>" class="glyphicon glyphicon-remove"></a></td>
                    </tr>
                    <?php 
                        endforeach;

                     ?>
                </table>
            </div>
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