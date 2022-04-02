<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php


//$utilisateurs =["Lina@gmail.com","passeLina","Edgar@gmail.com","passeEdgar"];

   // Vérifier si le formulaire est soumis avec POST 
   $verif = false;
   if(!empty($_POST['priority']) && !empty($_POST['subject']) && !empty($_POST['description'])
    && !empty($_POST['zoo-sector']) && !empty($_POST['email']) && !empty($_POST['password'])){
      $verif = true;
   }   

    $mysqli = new mysqli('127.0.0.1', 'root', '', 'zoocaz');
    // if($mysqli->connect_error){
    //     die('Erreur : ' .$mysqli->connect_error);
    // }
    // echo 'Connexion réussie';
    
   
   if (isset( $_POST['submit']) && $verif) {  
        $priority = $_POST['priority'];
        $subject = $_POST['subject'];
        $description = $_POST['description'];
        $status = $_POST['status'];
        $zooSector = $_POST['zoo-sector'];
        $email = $_POST['email']; 
        $password = $_POST['password']; 

        echo '<h3>Informations récupérées sur le ticket</h3>'; 
        echo '<br>Priority : ' . $priority . '<br>Subject : ' . $subject . 
             '<br>Description : ' . $description . '<br>Status : ' . $status . 
             '<br>Zoo sector : ' . $zooSector . '<br>Email : ' . $email . '<br>Password : ' . $password . '<br>' ; 
        
        $query = "INSERT INTO ticket (login, sujet, description, prio, secteur, statut)
        VALUES ('$email','$subject','$description','$priority','$zooSector','$status')";
        mysqli_query($mysqli, $query) or die ('Erreur SQL !'.$query.'<br />'. $mysqli -> error);
   }
  else{
   header('Location: formTicket.html');
  }
?>    


</body>
</html>

