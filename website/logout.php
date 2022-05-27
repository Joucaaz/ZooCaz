
<!-- logout the user  -->

<?php
session_start();
session_destroy();
header("Location: index.php");
exit();
?>