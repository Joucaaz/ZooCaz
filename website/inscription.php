<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="log.css">
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <link rel="apple-touch-icon" sizes="180x180" href="img/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="img/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="img/favicon/favicon-16x16.png">
    <link rel="manifest" href="img/favicon/site.webmanifest">

    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab&display=swap" rel="stylesheet">
    <title>ZooCaz</title>
</head>
<body>

    <!-- ----------------------- MENU ----------------------- -->
       
    <nav id="navmenu" style=" animation: fadeIn 3s;">
        <ul id="ulMenu">
            <a href="index.php"><img class="zoocazLogo" src="img/logo/ZooCazLogoB.png" alt="Logo ZooCaz"></a>
            <li id="lihomeMenu"><a href="index.php" style="text-decoration:none" id="homeMenu"  class="menu">Home</a></li>
            <li id="liaboutMenu" ><a href="http://localhost/wordpress/" target="_blank" style="text-decoration:none" id="aboutMenu" class="menu">WordPress ZooCaz</a></li>
            <a href="connexion.php"><button type="button" class="zoocazLog btn btn-outline-warning">LOG IN</button></a>

            <!-- <a href="."><button name="submit" type="submit" class="zoocazLog">Log In</button></a> -->

            
        </ul>
    </nav>
    
    <div class="form">

    
    <h1>Create a new account with a new email and new password</h1>

    <form id="formInscription" method="post" action="inscription.php">
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Email address</label>
          <input name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
          <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
        </div>
        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">Password</label>
          <input name="password" type="password" class="form-control" id="exampleInputPassword1">
        </div>
        <div class="mb-3 form-check">
          <input name="check" type="checkbox" class="form-check-input" id="exampleCheck1">
          <label class="form-check-label" for="exampleCheck1">Check me out</label>
        </div>
        <button name="submit" type="submit" style="background-color: #e3b405; border: #e3b405;" class="btn btn-primary">Submit</button>
        <p>Fill in all the boxes, otherwise the form will not be sent!</p>
      </form>       
    </div>

    <?php

    inscription();


    ?>


<footer class="text-center text-white" style="bottom: 0; position: absolute;">

<hr style="background-color:#e3b405; padding:3px">

<div class="social-media">
    <div class="social-fcb">
        <a target="_blank" href="https://www.facebook.com/joud.cazeaux/"><img src="img/reseaux/facebookblanc.png" alt="facebook"></a>
    </div>
    <div class="social-insta">
        <a target="_blank" href="https://www.instagram.com/joucaz/"><img src="img/reseaux/instagramblanc.png" alt="instagram"></a>
    </div>
    <div class="social-discord">
        <a target="_blank" href="https://discord.gg/aURg3sJyK7"><img src="img/reseaux/discord.png" alt="discord"></a>
    </div>
    <div class="social-linkedin">
        <a target="_blank" href="https://www.linkedin.com/in/joudcazeaux/"><img src="img/reseaux/linkedinblanc.png" alt="linkedin"></a>
    </div>
    <div class="social-mail">
        <a target="_blank" href="mailto:joud.cazeaux@free.fr"><img src="img/reseaux/mailblanc.png" alt="mail"></a>
    </div>
    <div class="social-github">
        <a target="_blank" href="https://github.com/Joucaaz"><img src="img/reseaux/github.png" alt="github"></a>
    </div>
</div>

<hr style="background-color:#e3b405; padding:3px">


<div class="footer-bottom text-center">
© 2022 Copyright : 
<a target="_blank" style="color:#e3b405; text-decoration:none" href="https://joudcazeaux.fr">Joudcazeaux.fr</a>
</div>
</footer>
<!--     
            <script>
                
                $("#formInscription").submit(function(event){ 
                var email= $("#exampleInputEmail1").val();
                var password= $("#exampleInputPassword1").val();

                let newUser = new User(email, password);
                
                sessionStorage.setItem("newUser", JSON.stringify(newUser))
                var jsonString = sessionStorage.getItem("newUser");
                var retrievedObject = JSON.parse(jsonString);

                console.log(newUser.nom());
                console.log(retrievedObject);
                // console.log(retrievedObject.email);
                // console.log(retrievedObject.password);
                alert("Votre login est " + email);
                });

            </script> -->
</body>
</html>

<?php


// add a new user in the database and connect him directly to the website

function inscription(){
    
    $mysqli = new mysqli('127.0.0.1', 'u847871246_joud', 'Juninho74', 'u847871246_zoocaz');        
    $verif = false;
    if(!empty($_POST['email']) && !empty($_POST['password']) && !empty($_POST['check'])){
       $verif = true;
    }   

    if (isset( $_POST['submit']) && $verif ){
        // $select = "SELECT * FROM users WHERE username = '$email'";
        // mysqli_query($mysqli, $select) or die ('ACCACACACErreur SQL !'.$select.'<br />'. $mysqli -> error);
        // var_dump($select);
        // if(mysqli_num_rows($select)) {
        //      exit('This username already exists');
        // }
        // else{
            $email = $_POST['email']; 
            $password = $_POST['password']; 

            $hashed_password = password_hash($password, PASSWORD_DEFAULT);

                $query = "INSERT INTO user (email, password) VALUES ('$email','$hashed_password')";
                mysqli_query($mysqli, $query) or die ('Erreur SQL !'.$query.'<br />'. $mysqli -> error);
                $_SESSION['email'] = $email;
                header('Location: index.php');
        
           
        // }

    }
}