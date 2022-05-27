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
            
        </ul>
    </nav>

    
    <div class="text">
        <p>Do you want to register on our website or you already have an account ?</p>
        <div class="button">
            <button name="submit" type="submit" class="buttonHome"><a style="text-decoration:none; color: white;" href="inscription.php">Register</a></button>
            <button name="submit" type="submit" class="buttonHome"><a style="text-decoration:none; color: white;" href="connexion.php">Connect</a></button>
        </div>
    </div>

    
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
</body>
</html>