<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mission6</title>
</head>
<body>
<?php


//$utilisateurs =["Lina@gmail.com","passeLina","Edgar@gmail.com","passeEdgar"];

   // Vérifier si le formulaire est soumis avec POST 
   $verif = false;
   if(!empty($_POST['email']) && !empty($_POST['password']) && !empty($_POST['check'])){
      $verif = true;
   }   
  
   
   if (isset( $_POST['submit']) && $verif ) {
     
      $bool = false;
      $email = $_POST['email']; 
      $password = $_POST['password'];

      $mysqli = new mysqli('127.0.0.1', 'root', '', 'zoocaz');

     $sth = $mysqli->prepare("SELECT count(*) as total FROM user WHERE email=? AND password=?");
     $sth->bind_param('ss', $email, $password);
     $sth->execute();
     $sth->bind_result($row);
     $sth->fetch();

     // $row affiche le total (1 ou 0)
     //echo $row;

     if($row == 0){
      // si il n'a pas de compte le formulaire réapparait
      header('Location: authentification.html');
     }
     else{
        echo "Vous êtes connecté";
     }

   // Autre façon de faire
   /*
      $sql = "SELECT count(*) as total FROM user WHERE email='$email' AND password='$password'";
      $resultats = $mysqli -> query($sql);
      $row = $resultats->fetch_assoc(); 
      echo $row["total"];
   */   

  }
  else{
   header('Location: authentification.html');
  }
?>


</body>
</html>

