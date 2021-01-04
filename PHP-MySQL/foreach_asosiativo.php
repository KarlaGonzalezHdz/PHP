<?php
    $alejandro = array('telefono'=> 54743221, 'edad'=>20, 'pais'=>'mexico');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Datos</h1>
    <ul>
    <?php
        foreach($alejandro as $datos => $valor){
            echo '<li>'. $datos . ' : ' . $valor.'</li>';
        }
    ?>
    </ul>
</body>
</html>