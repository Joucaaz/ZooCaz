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
            <li id="lihomeMenu"><a href="index.php" style="text-decoration:none" id="homeMenu"  class="menu ">Home</a></li>
            <li id="liaboutMenu" ><a href="http://localhost/wordpress/" target="_blank" style="text-decoration:none" id="aboutMenu" class="menu">WordPress ZooCaz</a></li>
                        
            <?php
            if(isset($_SESSION["email"]) && ($_SESSION["email"] == 'joudynho@free.fr' || $_SESSION["email"] == 'romuald.grignon@cyu.fr')){
                echo("<li id=\"liallticketMenu\"><a href=\"allTicket.php\" style=\"text-decoration:none\" id=\"allTMenu\" class=\"menu activeMenu\">All ticket</a></li>");
                echo("<li id=\"lichooseticketMenu\"><a href=\"oneTicket.php\" style=\"text-decoration:none\" id=\"oneTMenu\" class=\"menu\">Choose ticket</a></li>");
                echo("<li id=\"liaddticketMenu\"><a href=\"createTicket.php\" style=\"text-decoration:none\" id=\"addTMenu\" class=\"menu\">Create ticket</a></li>");
            }
            else if(isset($_SESSION["email"]) && ($_SESSION["email"] != 'joudynho@free.fr' || $_SESSION["email"] != 'romuald.grignon@cyu.fr')){
                echo("<li id=\"liallticketMenu\"><a href=\"allTicket.php\" style=\"text-decoration:none\" id=\"allTMenu\" class=\"menu activeMenu\">All ticket</a></li>");
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


<h1 style="text-align: center">Liste Tickets</h1>
<table class="table table-striped table-dark table-hover">
   <thead style="background-color: #e3b405">
      <tr>
         <th>id</th>
         <th>Date</th>
         <th>Login</th>
         <th>Sujet</th>
         <th>Description</th>
         <th>Priority</th>
         <th>Secteur</th>
         <th>Statut</th>
      </tr>
   </thead>
   <tbody>

<?php

showAllTicket();

?>
</tbody>
</table>


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

<?php


// select all ticket in database and return the query

function selectAllTicket(){
    $mysqli = new mysqli('127.0.0.1', 'u847871246_joud', 'Juninho74', 'u847871246_zoocaz');
if(isset($_SESSION["email"]) && ($_SESSION["email"] == 'joudynho@free.fr' || $_SESSION["email"] == 'romuald.grignon@cyu.fr')){
    $query = 'select * from ticket';
}
else{
    $sessionEmail = $_SESSION["email"] ;
    $query = "select * from ticket where login like '$sessionEmail'";  
}



$result = $mysqli -> query($query);

$row = $result -> fetch_all();
return $row;
}

// recup the query and show in a table all results

function showAllTicket(){

    $row = selectAllTicket();
    
    foreach($row as $ticket){
        echo '<tr>';
        // var_dump($caca);
        foreach($ticket as $value){          
          echo '<td>' .$value. '</td>';     
        }
        echo '</tr>';
    }
}