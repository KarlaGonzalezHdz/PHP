<?php

    if(isset($_COOKIE['font-size'])){
        $tamaño = htmlspecialchars($_COOKIE['font-size']);
    } else {
        $tamaño = '15px';
    }

    
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Texto</title>
    <style>
        p {
            font-size: <?php echo $tamaño;?>;
        }

    </style>
</head>
<body>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea quia facilis explicabo quod placeat consequuntur consectetur maxime quisquam nobis quis molestiae debitis reprehenderit accusamus accusantium modi, enim similique ex suscipit.</p>
</body>
</html>