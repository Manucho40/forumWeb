<?php 
session_start();
include_once "fonction/admin.php";
require_once "fonction/bdd.php";
$bdd = bdd();

$posts = posts();



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
    <link rel="stylesheet" href="maine.css">
    <script src="jquery-3.5.1.min.js"></script>
</head>
<body>
    <?php include "header.php"; ?>
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
                        foreach ($posts as $post) :
                          
                     ?>
                    <tr>
                        <td><?= $post["titre"] ?></td>
                        <td><a href="modifier.php?id=<?= $post["id"] ?>"  class="glyphicon glyphicon-pencil"></a></td>
                        <td><a href="supprimer.php?id=<?= $post["id"] ?>" class="glyphicon glyphicon-remove"></a></td>
                    </tr>
                    <?php 
                        endforeach;

                     ?>
                </table>
            </div>
        </div>
       
    </div>
    <?php include "footer.php"; ?>
</body>
</html>