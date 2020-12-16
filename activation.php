
<?php  
 session_start();
 require_once "fonction/bdd.php";
  require_once "fonction/membre.php";
$bdd = bdd();

 

// // if (!empty($_GET['p']) && is_already_in_use('pseudo', $_GET['p'], 'membres') && !empty($_GET['token']) ) {
// //      $pseudo = $_GET['p'];
// //      $token = $_GET['token'];

// //      $q = $bdd->prepare(" SELECT membres.email, membres.password FROM membres WHERE pseudo = ?");
// //      $q->execute([$pseudo]);    

// //      $data = $q->fetch(PDO::FETCH_OBJ);
// //      $token_verif = sha1($pseudo.$data->email.$data->password);

// //     die($_GET['token']);


// // }else{
// //     redirect('index.php');              
// // }
// //...
// // Votre code
// //...
// // Connexion à la base de données
// //...
// // Récupération des variables nécessaires à l'activation
$p = $_GET['p'];
 $cle = $_GET['cle'];
$actif = NULL;
$clebdd = NULL;
// // Récupération de la clé correspondant au $login dans la base de données
$stmt = $bdd->prepare("SELECT cle, active FROM membres WHERE pseudo like :pseudo ");
if($stmt->execute(array(':pseudo' => $p)) && $row = $stmt->fetch())
 {
 $clebdd = $row['cle']; // Récupération de la clé
 $actif = $row['active']; // $actif contiendra alors 0 ou 1
  }
// On teste la valeur de la variable $actif récupérée dans la BDD
if($actif == '1') // Si le compte est déjà actif on prévient
    {
  echo "Votre compte est déjà actif !";
     }
    else // Si ce n'est pas le cas on passe aux comparaisons
     {
     if($cle = $clebdd) // On compare nos deux clés
     {
//  // Si elles correspondent on active le compte !

      echo "<h1>SUPER VOTRE COMPTE A ETE ACTIVE</h1>";
        



//  // La requête qui va passer notre champ actif de 0 à 1
       $stmt = $bdd->prepare("UPDATE membres SET active = 1 WHERE pseudo like :pseudo ");
       $stmt->bindParam(':pseudo', $p);
       $stmt->execute();
 
      }
      else {
       echo "Erreur ! Votre compte ne peut être activé...";
      }
      }
   




