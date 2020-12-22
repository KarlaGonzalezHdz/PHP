<?php
    /*
    if(condicion){
        //Instrucciones
    } 
    */

    /* Operadores de comparacion:
        == Igualdad
        < Menor que
        > Mayor que
        <= Menor o igual que
        >= Mayor o igual que 
        != diferente 
        ! Negacion
    */

    /* Operadores lógicos:
        && - Evalua que se cumplan las 2 condiciones
        || , or - Evalua que se cumpla al menos una condicion
        xor - Evalua que se cumpla una y solo una condicion
    */

    $edad = 18;
    $nombre = 'Carlos';

    if($edad >=18 && $nombre=='Carlos'){
        echo '<h1>Bienvenido '.$nombre.'</h1>';
    }

    if($edad < 18 or $nombre != 'Carlos'){
        echo '<h1>Eres menor de edad y tu nombre no es Carlos</h1>';
    }
?>
