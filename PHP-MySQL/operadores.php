<?php
    
    /*
        OPERADORES ARITMETICOS
        + Suma
        - Resta
        * Multiplicación
        / Division
        % Modulo
    */
    $numero = 10;
    $numero2 = 5;

    $resultado = $numero + $numero2;
    $resultado2 = $numero - $numero2;
    $resultado3 = $numero * $numero2;
    $resultado4 = $numero / $numero2;
    $resultado5 = $numero % $numero2;

    echo $resultado.'<br>';
    echo $resultado2.'<br>';
    echo $resultado3.'<br>';
    echo $resultado4.'<br>';
    echo $resultado5.'<br>';

    /*
        OPERADORES DE ASIGNACIÓN

        = 
        +=
        -=
        *=
        /=
    */

    $numero = 10;
    $numero2 = 5;

   // $numero = $numero +7;
    $numero = $numero+7;
    echo $numero;

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
?>