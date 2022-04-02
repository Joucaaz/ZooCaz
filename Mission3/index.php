<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="imagesZoo.css">
    <title>PHP</title>
</head>
<body>
    <hr/>
    <div>
        
    <?php 
        $zebra='https://thumbs.dreamstime.com/b/zebra-portrait-morning-light-zebra-portrait-walking-short-grass-106270412.jpg';
        $girafe='https://d1jyxxz9imt9yb.cloudfront.net/animal/120/meta_image/regular/PhotoCredit-Ashwati_Vipin_Giraffe_DSC_0215a.jpg';
        $panda='https://cdn.unitycms.io/image/ocroped/400,400,1000,1000,0,0/gXYjElDTPuM/9oSFOZ0m4ev8_J8SoXRAbf.jpg';
    ?>

    <img src="<?php echo $zebra;?>">
    <img src="<?php echo $girafe;?>">
    <img src="<?php echo $panda;?>">
    </div>
</body>

</html>
<html>