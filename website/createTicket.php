<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">    
    <link rel="stylesheet" href="ticket.css">
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
                echo("<li id=\"liallticketMenu\"><a href=\"allTicket.php\" style=\"text-decoration:none\" id=\"allTMenu\" class=\"menu\">All ticket</a></li>");
                echo("<li id=\"lichooseticketMenu\"><a href=\"oneTicket.php\" style=\"text-decoration:none\" id=\"oneTMenu\" class=\"menu\">Choose ticket</a></li>");
                echo("<li id=\"liaddticketMenu\"><a href=\"createTicket.php\" style=\"text-decoration:none\" id=\"addTMenu\" class=\"menu activeMenu\">Create ticket</a></li>");
            }
            else if(isset($_SESSION["email"]) && ($_SESSION["email"] != 'joudynho@free.fr' || $_SESSION["email"] != 'romuald.grignon@cyu.fr')){
                echo("<li id=\"liallticketMenu\"><a href=\"allTicket.php\" style=\"text-decoration:none\" id=\"allTMenu\" class=\"menu\">All ticket</a></li>");
                echo("<li id=\"liaddticketMenu\"><a href=\"createTicket.php\" style=\"text-decoration:none\" id=\"addTMenu\" class=\"menu activeMenu\">Create ticket</a></li>");

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

    
        
<div class="divFormTicket" style="margin-top: 5%;">

<h1>Create a ticket</h1>

<form method="post" action="createTicket.php" class="formTicket">
    <label for="priority-select">Priority:</label>
    <select name="priority" id="priority-select">
        <option value="">--Please choose a priority--</option>
        <option value="high">High</option>
        <option value="medium">Medium</option>
        <option value="low">Low</option>
    </select><br>

    <label for="subject">Subject:</label>
    <input type="text" id="subject" name="subject" placeholder="Your subject"><br>

    <label for="description">Description:</label>
    <textarea id="description" name="description" rows="4" cols="50" placeholder="Your description here"></textarea><br>

    <label for="lname">Status</label>
    <select name="status" id="status-select">
        <option value="En cours">En cours</option>
        <option value="Résolu">Resolu</option>
    </select><br>

    <label for="sector-select">Zoo sector:</label>
    <select name="zoo-sector" id="sector-select">
        <option value="">--Please choose a sector--</option>
        <option value="felines">Felines</option>
        <option value="aquarium">Aquarium</option>
        <option value="primates">Primates</option>
        <option value="birds">Birds</option>
    </select><br>

    <!-- <label for="exampleInputEmail1">Email address:</label>
    <input name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small><br>

    <label for="exampleInputPassword1">Password:</label>
    <input name="password" type="password" class="form-control" id="exampleInputPassword1" placeholder="Password"><br> -->

    <button name="submit" type="submit" id="submit" class="btn btn-primary">Submit</button>
    <p style="font-size: 1em; margin: 7% 0 7%;">Be sure to fill in all the boxes (except the status which is already filled in), otherwise the form will not be sent!</p>
  </form>

</div>

<?php

createTicket();


?>


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

// add a new ticket to the database, and select the username directly with session variable

function createTicket(){
    
$verif = false;
if(!empty($_POST['priority']) && !empty($_POST['subject']) && !empty($_POST['description'])
 && !empty($_POST['zoo-sector'])){ 
   $verif = true;
}   

$mysqli = new mysqli('127.0.0.1', 'u847871246_joud', 'Juninho74', 'u847871246_zoocaz'); 

if (isset( $_POST['submit']) && $verif) {  
     $priority = $_POST['priority'];
     $subject = $_POST['subject'];
     $description = $_POST['description'];
     $status = $_POST['status'];
     $zooSector = $_POST['zoo-sector'];
     $email = $_SESSION["email"];
  //    $email = $_POST['email']; 
  //    $password = $_POST['password']; 
     echo '<h3>Informations récupérées sur le ticket</h3>'; 
     echo '<div style="text-align: center;"><br>Priority : ' . $priority . '<br>Subject : ' . $subject . 
          '<br>Description : ' . $description . '<br>Status : ' . $status . 
          '<br>Zoo sector : ' . $zooSector . '<br>Email : ' . $email .'<br></div>' ; 
  
     
     $query = "INSERT INTO ticket (login, sujet, description, prio, secteur, statut)
     VALUES ('$email','$subject','$description','$priority','$zooSector','$status')";
     mysqli_query($mysqli, $query) or die ('Erreur SQL !'.$query.'<br />'. $mysqli -> error);
    //  header('Location: allTicket.php');

}
else{
// header('Location: createTicket.php');
}
}