<?php

    echo file_get_contents('documento.txt');

    file_put_contents('documento.txt', "Hola Karla \n" , FILE_APPEND);

    file_put_contents('documento.txt', '');
    for($i=1; $i<=10; $i++){
        file_put_contents('documento.txt', "$i \n", FILE_APPEND);
    } 

    $archivo = file('documento.txt');
    
?>
