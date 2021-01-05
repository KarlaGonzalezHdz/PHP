<?php
    //   print_r($_POST);
    if(!$_POST){
        header('Location: index.php');
    }

    $nombre = $_POST['nombre'];
    $sexo = $_POST['sexo'];
    $year = $_POST['year'];
    $termino = $_POST['terminos'];

    echo 'Hola '.$nombre.' eres '.$sexo;

   
?>