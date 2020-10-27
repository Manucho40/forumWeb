
<!DOCTYPE html>
<html>
<head>
  <title></title>
  <link rel="stylesheet" href="admin/css/sb-admin-2.min.css">
  <link href="fontawesome-free-5.13.0-web/css/all.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
</head>
<body>
<nav class="navbar navbar-dark  navbar-expand-lg " style="background-color: #a50400;">

  <div class="col-md-2 col-sm-3 ">
     <a class="navbar-brand" href="index.php"><img src="img/logo.png" width="50px" height="50px"></a>
  </div>
 <div class="col-md-4 col-sm-3">
   <marquee style="color: white; font-size: 30px;">BIENVENU SUR LE FORUM DES ETUDIANTS DE L'IUTEA</marquee>
 </div>
 <div class="col-md-5 col-sm-3">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
    </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.php" style=" font-weight: bold;">Accueil <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="contact.php" style=" font-weight: bold;">Contact <span class="sr-only">(current)</span></a>
      </li>
      <?php 
          if (isset($_SESSION["membre"])) :
                                   
        ?>
      <li class="nav-item active">
        <a class="nav-link" href="compte.php" style=" font-weight: bold;">Compte <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Topics
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="poster.php" style=" font-weight: bold;">New Topic <span class="sr-only">(current)</span></a>
          <a class="dropdown-item" href="mesTopics.php" style=" font-weight: bold;">Mes Topics <span class="sr-only">(current)</span></a>
          
        </div>
      </li>
    <li class="nav-item active">
        <a class="nav-link" href="posts.php" style=" font-weight: bold;">Gerer <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="deconnexion.php" style=" font-weight: bold;">Déconnexion <span class="sr-only">(current)</span></a>
      </li>
     
            
      <?php 
          else :
      ?>
      <li class="nav-item active">
        <a class="nav-link" href="connexion.php" style=" font-weight: bold;">Connexion <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="inscription.php" style=" font-weight: bold;">Inscription <span class="sr-only">(current)</span></a>
      </li>
      
      <?php 
        endif;
      ?>
      
    </ul>
    
  </div>
 </div>
 
</nav>








</body>
</html>