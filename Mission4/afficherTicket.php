<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="ticket.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab&display=swap" rel="stylesheet">
    
    <title>One Ticket ZooCaz</title>
</head>
<body>

    <!-- ----------------------- MENU ----------------------- -->
       
    <nav id="navmenu" style=" animation: fadeIn 3s;">
        <ul id="ulMenu">
            <li id="lihomeMenu"><a href="formTicket.html" style="text-decoration:none" id="homeMenu"  class="menu ">Form</a></li>
            <li id="liaboutMenu" ><a href="afficheListeTickets.php" style="text-decoration:none" id="aboutMenu" class="menu">All tickets</a></li>
            <li id="lihomeMenu"><a href="afficherTicket.php" style="text-decoration:none" id="homeMenu"  class="menu activeMenu ">One ticket</a></li>
        </ul>
    </nav>

    <!-- <div class="logo">
        <img src="ZooCazLogoB.png" style="width: 20%;" alt="ZooCaz">
    </div> -->

<div class="divFormTicket" style="margin-top: 5%;">

<form method="post" action="afficherTicket.php" class="formTicket">

    <!-- <p>Choississez un numéro de ticket pour l'afficher</p> -->
    

    <label for="subject">Id Ticket:</label>
    <input type="number" id="tentacles" name="idTicket">

    <button style="margin-top: 4%; margin-bottom: 4%;" name="submit" type="submit" id="submit" class="btn btn-primary">Submit</button>
    <!-- <p style="font-size: 1em;">Remplissez bien toute les cases (à part status qui est déjà pré-rempli), sinon le formulaire ne s'enverra pas !</p> -->
</form>

</div>

<?php
    $verif = false;
    if(!empty($_POST['idTicket'])){
        $verif = true;
    }   

    $mysqli = new mysqli('127.0.0.1', 'root', '', 'zoocaz');

    if (isset( $_POST['submit']) && $verif){
        $idTicket = $_POST['idTicket'];

        $query = "select * from ticket where id='$idTicket'";
        $result = $mysqli -> query($query);
        if($row = $result -> fetch_all()){

       


    ?>
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
        foreach($row as $ticket){
            echo '<tr>';
            foreach($ticket as $value){          
            echo '<td>' .$value. '</td>';     
            }
            echo '</tr>';
        }
    
    echo '</tbody>';
    echo '</table>';
    
    ?>

    <form method="post" action="modifierTicket.php" class="formTicket">
        <label for="lname">Voulez vous modifier le statut ?</label>
        <select name="status" id="status-select">
            <option value="En cours">En cours</option>
            <option value="Resolu">Resolu</option>
        </select><br>

        <input type="hidden" name="id" value="<?php echo "".$idTicket."" ?>"></input>

        <button name="submit" type="submit" id="submit" class="btn btn-primary">Submit</button>
    </form>

    <?php

    // include_once("modifierTicket.php");
    }
    else{
        echo '<p>Aucun résultat ne correspond</p>';
    }
}
else{
    echo '<p>Veuillez entrer un ID de ticket</p>';
}
    
?>

</body>
</html>