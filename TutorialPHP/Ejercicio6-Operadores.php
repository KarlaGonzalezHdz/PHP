<?php
    /*
    Operadores de Aritmética
    Adición (+)
    Susbtracción (-)
    Multiplicación (*)
    División (/)
    Módulo (%)
    */

    //Ejemplos

   $adicion = 4 + 4; // el valor es 8

   $multiplicacion = $adicion * 3;

   echo $adicion;
   echo "<br>";
   echo $multiplicacion;
   echo "<br>";

   /*
    Operador de asignacion
    Asignacion (=)
    */

    //Ejemplo 

    $valor1 = "hola";
    $valor2 = 20;

    echo $valor1;
    echo "<br>";
    echo $valor2;
    echo "<br>";

    /*
    Operador de cadena (CONCATENACION)
    Punto (.)
    */

    $texto = "yo tengo ". 20 . " años";
    echo "<br>";
    echo $texto;
    echo "<br>";

    $tengo = "yo ";
    $tengo .= "tengo ";
    $tengo .= "20 años";
    echo "<br>";

    echo $tengo;
    echo "<br>";
    /*
    Operadores de comparación
    Igual (==)
    Identico (===)
    Diferente (!= o <>)
    No identicos (!==)
    Menor que (<)
    Mayor que (>)
    Menor o igual que (<=)
    Mayor o igual a que (>=)
    */

    // Ejemplos
    echo "<br>";
    echo (6>=4);
    echo "<br>";
    echo (5 == 11);

    /*
    Operador de control de errores
    arroba (@)
     */

    //Ejemplos
    echo "Hola";
    @define (); //esto deberia producir un error;
    echo "<br>";

    /*
    Operadores de incremento
    incremento (++)
    */

    //Ejemplos
    $variable = 3;

    echo ++$variable; // se cambia en la inicial y la segunda a 4 , 4
    echo "<br>"; 
    echo $variable++; // se queda el primer valor y la segunda
    echo "<br>";
    echo $variable;
    echo "<br>";


    /*
    Operadores de logica
    y (&& o and) devuelve 1 si ambos son 1
    o (|| o or ) devuelve 1 si algún operando es 1
    o exclusivo (xor) devuelve 1 si solo 1 operando es 1

    */

    //Ejemplo
    echo "<br>";
    echo ((2 == 2) && (2 != 1)); //verdadero 1
    echo "<br>";
    echo ((3 == 3) or (4 != 4)); // verdadero 1
    echo "<br>";


?>