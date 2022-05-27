    
<!-- query to change the status in the bdd -->

<?php
    include_once('oneTicket.php');
    $mysqli = new mysqli('127.0.0.1', 'u847871246_joud', 'Juninho74', 'u847871246_zoocaz');
    if(isset( $_POST['submit'])){
        $id = $_POST['status'];
        $idTicket = $_POST['id'];
        $query = "update ticket set statut='$id' where id='$idTicket'";
        mysqli_query($mysqli, $query) or die ('Erreur SQL !'.$query.'<br />'. $mysqli -> error);
    }
?>