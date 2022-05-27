<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
  
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <link rel="apple-touch-icon" sizes="180x180" href="img/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="img/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="img/favicon/favicon-16x16.png">
    <link rel="manifest" href="img/favicon/site.webmanifest">

    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab&display=swap" rel="stylesheet">
    <!-- <link rel="icon" type="image/x-icon" href="/img/favicon.ico"> -->
    <title>ZooCaz</title>
</head>
<body>

    <!-- ----------------------- MENU ----------------------- -->
       
    <nav id="navmenu" style=" animation: fadeIn 3s;">
        <ul id="ulMenu">
            <a href="index.php"><img class="zoocazLogo" src="img/logo/ZooCazLogoB.png" alt="Logo ZooCaz"></a>
            <li id="lihomeMenu"><a href="index.php" style="text-decoration:none" id="homeMenu"  class="menu activeMenu">Home</a></li>
            <li id="liaboutMenu" ><a href="http://localhost/wordpress/" target="_blank" style="text-decoration:none" id="aboutMenu" class="menu">WordPress ZooCaz</a></li>
                        
            <?php
            if(isset($_SESSION["email"]) && ($_SESSION["email"] == 'joudynho@free.fr' || $_SESSION["email"] == 'romuald.grignon@cyu.fr')){
                echo("<li id=\"liallticketMenu\"><a href=\"allTicket.php\" style=\"text-decoration:none\" id=\"allTMenu\" class=\"menu\">All ticket</a></li>");
                echo("<li id=\"lichooseticketMenu\"><a href=\"oneTicket.php\" style=\"text-decoration:none\" id=\"oneTMenu\" class=\"menu\">Choose ticket</a></li>");
                echo("<li id=\"liaddticketMenu\"><a href=\"createTicket.php\" style=\"text-decoration:none\" id=\"addTMenu\" class=\"menu\">Create ticket</a></li>");
            }
            else if(isset($_SESSION["email"]) && ($_SESSION["email"] != 'joudynho@free.fr' || $_SESSION["email"] != 'romuald.grignon@cyu.fr')){
                echo("<li id=\"liallticketMenu\"><a href=\"allTicket.php\" style=\"text-decoration:none\" id=\"allTMenu\" class=\"menu\">All ticket</a></li>");
                echo("<li id=\"liaddticketMenu\"><a href=\"createTicket.php\" style=\"text-decoration:none\" id=\"addTMenu\" class=\"menu\">Create ticket</a></li>");

            }

            if(isset($_SESSION["email"])){
                echo("<a href=\"logout.php\"><button type=\"button\" class=\"zoocazLog btn btn-outline-warning\">" . $_SESSION["email"] . " (LOG OUT)</button></a>");
            }
            else{
                echo("<a href=\"log.php\"><button type=\"button\" class=\"zoocazLog btn btn-outline-warning\">LOG IN</button></a>");
            }
            ?>
            
        </ul>
    </nav>

    
    <div class="hourAnimal">

    <!-- show a different picture when the hour change -->

    <?php
      $heure = date("H");
      $minute = date("i");  
      echo("<div id=\"containerAnimal\" style=\"text-align: center;\">");
      echo("<h4>It's $heure h $minute </h4>");
      switch($heure){
            case $heure < 12:
                echo("<img src=\"img/animals/zebra.jpg\" width=\"300px\" >");
                break;
            case $heure >= 12 && $heure < 19:
                echo("<img src=\"img/animals/girafe.jpg\" width=\"300px\">");
                break;
            case $heure >= 19:
                echo("<img src=\"img/animals/panda.jpg\" width=\"300px\">");
                break;    
      }
      echo("</div>");
      ?>
        
    </div>
    
    
    <div class="sector-container">
    <h1>4 sectors to visit !</h1>
    <div class="sector1">
        <div class="felins sector">
            <h3>Felines</h3>
            <img src="img/animals/felins.jpg" alt="">
            <p>Felines are carnivorous mammalian animals of varying sizes depending on the species. The cat is a small feline species and the lion is a large one.</p>
        </div>
        <div class="aquarium sector">
            <h3>Aquarium</h3>
            <img src="img/animals/aquarium.jpg" alt="">
            <p>Fish are animals that lives in water, are covered with scales, and breathes by taking water in through his mouth, or the flesh of these animals eaten as food.</p>
        </div>
    </div>
    <div class="sector2">
        <div class="primate sector">
            <h3>Primates</h3>
            <img src="img/animals/primate.jpg" alt="">
            <p>Primates are the animals that are closest to humans in terms of intelligence and the way they walk.</p>
        </div>
        <div class="bird sector">
            <h3>Birds</h3>
            <img src="img/animals/bird.jpg" alt="">
            <p>Birds are flying animals, with all kinds of colors. Hundreds of species of birds exist.</p>
        </div>
    </div>
    </div>

    <footer class="text-center text-white">

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