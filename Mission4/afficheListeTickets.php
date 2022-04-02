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
    <title>All Tickets</title>
</head>
<body>


    <!-- ----------------------- MENU ----------------------- -->
       
    <nav id="navmenu" style=" animation: fadeIn 3s;">
        <ul id="ulMenu">
            <li id="lihomeMenu"><a href="formTicket.html" style="text-decoration:none" id="homeMenu"  class="menu ">Form</a></li>
            <li id="liaboutMenu" ><a href="afficheListeTickets.php" style="text-decoration:none" id="aboutMenu" class="menu activeMenu">All tickets</a></li>
            <li id="lihomeMenu"><a href="afficherTicket.php" style="text-decoration:none" id="homeMenu"  class="menu  ">One ticket</a></li>
            

            
        </ul>
    </nav>
<?php

$mysqli = new mysqli('127.0.0.1', 'root', '', 'zoocaz');

$query = 'select * from ticket';

$result = $mysqli -> query($query);


$row = $result -> fetch_all();
?>

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
foreach($row as $ticket){
    echo '<tr>';
    // var_dump($caca);
    foreach($ticket as $value){          
      echo '<td>' .$value. '</td>';     
    }
    echo '</tr>';
}
?>
 </tbody>
</table>
</body>
</html>