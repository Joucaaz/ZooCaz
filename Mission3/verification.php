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

   
   if (isset( $_POST['submit'] ) ) {
     
    $bool = false;
    $email = $_POST['email']; 
    $password = $_POST['password']; 
    /*
     foreach($utilisateurs as $key => $value){
         if(strtoupper($email) == strtoupper($value)){
             foreach($utilisateurs as $key2 => $value2){
                if(strtoupper($password) == strtoupper($value2)){
                    $bool = true;  
                    $_SESSION['email'] = $email ;                
                 }
             }
         }
     }
*/

   $json = file_get_contents('login.json');
   
   $json_data = json_decode($json,true);
   //print_r($json_data);
   foreach($json_data as $logs){
      
         foreach($logs as $login){
            //print_r($login);
            if(strtoupper($email) == strtoupper($login["email"]) && strtoupper($password) == strtoupper($login["mdp"])){
               $bool = true;
               $_SESSION['email'] = $email ;   
            }
         }
         
   }

     if($bool){         
         echo 'Vous êtes connecté : ' . $_SESSION['email'] ;

         //entrer les mails/mdp/date dans un fichier long.log
         $date = strftime("%d/%m/%y %H:%M:%S");
         $fp = fopen('long.log', 'a');
         fwrite($fp, $email . "\r\n" . $password . "\r\n" . $date);
         fclose($fp);
     }
     else{ 
         echo "<div style='border: solid 2px red;'>Votre compte n'existe pas</div>";
         //header('Location: authentification.html');
     }
  }
// adresse avec POST :
// http://localhost/ZooCaz/Mission3/verification.php
?>    


<?php
   // Vérifier si le formulaire est soumis avec GET 
   if ( isset( $_GET['submit'] ) ) {
     
     $email = $_GET['email']; 
     $password = $_GET['password']; 
     echo '<h3>Informations récupérées en utilisant GET</h3>'; 
     echo 'Email : ' . $email . '<br> Password : ' . $password . '<br>' ; 
     exit;
  } 
// adresse avec GET :
// http://localhost/ZooCaz/Mission3/verification.php?email=joudynho%40free.fr&password=azerty&submit=
?>


</body>
</html>

