    


<?php
    include_once('afficherTicket.php');
    $mysqli = new mysqli('127.0.0.1', 'root', '', 'zoocaz');

    if(isset( $_POST['submit'])){
        $id = $_POST['status'];
        $idTicket = $_POST['id'];
        $query = "update ticket set statut='$id' where id='$idTicket'";
        mysqli_query($mysqli, $query) or die ('Erreur SQL !'.$query.'<br />'. $mysqli -> error);
    }
?>