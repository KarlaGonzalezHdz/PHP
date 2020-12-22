<?php
    $mes = 'Diciembre';

    switch($mes){
        case 'Diciembre':
            echo 'Feliz Navidad <br>';
            break;
        case 'Enero': 
            echo 'Feliz Año nuevo <br>';
            break;
        case 'Febrero':
            echo 'Feliz San Valentin <br>';
            break;
        default:
            echo 'En este mes no se celebra nada <br>';
            break;
    }

    if($mes == 'Diciembre'){
        echo 'Feliz Navidad <br>';
    } else if($mes == 'Enero'){
        echo 'Feliz año nuevo <br>';
    }else{
        echo 'En este mes no se festeja nada <br>';
    }
?>