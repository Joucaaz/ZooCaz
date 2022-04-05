<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="user.js"></script>
    <script src="function.js"></script>
    <link rel="stylesheet" href="style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab&display=swap" rel="stylesheet">
    <title>Mission6</title>
</head>
<body>
    
     <!-- ----------------------- MENU ----------------------- -->
       
     <nav id="navmenu" style=" animation: fadeIn 3s;">
        <ul id="ulMenu">
            <li id="lihomeMenu"><a href="index.php" style="text-decoration:none" id="homeMenu"  class="menu activeMenu">Home</a></li>
            <li id="liaboutMenu" ><a href="authentification.html" style="text-decoration:none" id="aboutMenu" class="menu ">Connect</a></li>
            <li id="lihomeMenu"><a href="inscription.php" style="text-decoration:none" id="homeMenu"  class="menu ">Register</a></li>            
        </ul>
    </nav>

    <div class="text">
        <p>Do you want to register on our website or you already have an account ?</p>
        <div class="button">
            <button name="submit" type="submit" class="buttonHome"><a style="text-decoration:none; color: white;" href="inscription.php">Register</a></button>
            <button name="submit" type="submit" class="buttonHome"><a style="text-decoration:none; color: white;" href="authentification.html">Connect</a></button>
        </div>
    </div>
    
</body>
</html>