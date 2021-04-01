<?php 
session_start();
if (isset($_SESSION["membre"])){
    header("Location: compte.php");
}
include_once "fonction/membre.php";
require_once "fonction/bdd.php";
$bdd = bdd();

if (!empty($_POST)) {
    $erreurs = inscription();
}

 ?>



<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Infoprog - Inscription</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:400,300,700">
    <link rel="stylesheet" href="maine.css">
    <script src="jquery-3.5.1.min.js"></script>
</head>
<body>
    <?php include "header.php"; ?>
    <div class="container-fluid">
        <div class="row">
            <div class="col-xs-12 col-sm-offset-1">
                <h1>Devenez dès à présent membre !</h1>
            </div>
        </div>

        <style>
   
        
        </style>
        <form  method="post" action="">
            <?php 
            if(isset($erreurs)):
                if ($erreurs) :
                    foreach ($erreurs as $erreur) :
                        
                    
             ?>
            <div class="row">
                <div class="col-sm-6 col-sm-offset-1">
                    <div class="message erreur"><?= $erreur ?></div>
                </div>
            </div>
            <?php 
                endforeach;
                else : 

             ?>
            <div class="row">
                <div class="col-sm-6 col-sm-offset-1">
                    <div class="message confirmation">Votre inscription a bien été prise en compte !</div>
                </div>
            </div>

            <?php
                endif; 
                endif;

             ?>
            <div class="row">
                <div class="col-sm-6 col-sm-offset-1">
                    <input type="text" name="pseudo" placeholder="Pseudo *" value="<?php if(isset($_POST["pseudo"])) echo $_POST["pseudo"]; ?>" required="required">
                </div>
                <div class="col-sm-6 col-sm-offset-1">
                    <input type="text" name="nom" placeholder="nom *" value="<?php if(isset($_POST["nom"])) echo $_POST["nom"]; ?>" required="required">
                </div>
                <div class="col-sm-6 col-sm-offset-1">
                    <input type="text" name="prenom" placeholder="Prenom *" value="<?php if(isset($_POST["prenom"])) echo $_POST["prenom"]; ?>" required="required">
                </div>
                <div class="col-sm-6 col-sm-offset-1">
                    <input type="text" name="email" placeholder="Adresse e-mail *" value="<?php if(isset($_POST["email"])) echo $_POST["email"]; ?>" required="required">
                </div>
                
                <div class="col-sm-6 col-sm-offset-1">
                    <input type="password" name="password" placeholder="Mot de passe *" required="required">
                </div>
                <div class="col-sm-6 col-sm-offset-1">
                    <input type="password" name="passwordconf" placeholder="Vérification du mot de passe *" required="required" >
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6 col-sm-offset-1">
                    <input type="submit" value="M'inscrire!">
                </div>
            </div>
        </form>
       
    </div><br>
    
    </div>
    <?php include "footer.php"; ?>  
</body>
</html>