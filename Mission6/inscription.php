<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="user.js"></script>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="form.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab&display=swap" rel="stylesheet">
    <title>Mission6</title>
</head>
<body>
    
      <!-- ----------------------- MENU ----------------------- -->
       
      <nav id="navmenu" style=" animation: fadeIn 3s;">
        <ul id="ulMenu">
            <li id="lihomeMenu"><a href="index.php" style="text-decoration:none" id="homeMenu"  class="menu ">Home</a></li>
            <li id="liaboutMenu" ><a href="authentification.html" style="text-decoration:none" id="aboutMenu" class="menu ">Connect</a></li>
            <li id="lihomeMenu"><a href="inscription.php" style="text-decoration:none" id="homeMenu"  class="menu activeMenu">Register</a></li>
            

            
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
        <p>Remplissez bien toute les cases, sinon le formulaire ne s'enverra pas !</p>
      </form>       
    </div>

    <?php

        $mysqli = new mysqli('127.0.0.1', 'root', '', 'zoocaz');
        
        $verif = false;
        if(!empty($_POST['email']) && !empty($_POST['password']) && !empty($_POST['check'])){
           $verif = true;
        }   

        if (isset( $_POST['submit']) && $verif ){
    
            $email = $_POST['email']; 
            $password = $_POST['password']; 
            
            $query = "INSERT INTO user (email, password) VALUES ('$email','$password')";
            mysqli_query($mysqli, $query) or die ('Erreur SQL !'.$query.'<br />'. $mysqli -> error);
            ?>
            
            <?php
        }
        // else{
        //     header('Location: inscription.php');
        // }

    ?>

    
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

            </script>

</body>
</html>