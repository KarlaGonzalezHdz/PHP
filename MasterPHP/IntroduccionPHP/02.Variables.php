<?php
    #Variable numerica 
    $numero = 5;
    $numeroCinco = 5;
    
    echo "Esto es una variable numero: $numero" ;
    echo "<br>";

    #Variable texto
    $palabra = "palabra";
    echo "Esto es una variable de texto con valor de $palabra";
    echo "<br>";

    #variable boleana
    $boleana = true; #verdadero -> 1 / falso -> 0
    echo "Esto es una variable boleana: $boleana";
    echo "<br>";
    
    #variable Arreglo
    $arreglo = array("rojo", "amarillo");
    echo "Esto es una variable arreglo: $arreglo[0]";
    echo "<br>";

    #variable Arreglo con propiedades
    $verduras = array("verdura1"=>"lechuga", "verdura2"=>"cebolla");
    echo "Esto es una variable arreglo con propiedades: $verduras[verdura2]";
    echo "<br>";
    
    #variable objeto
    $frutas = (object)["fruta1"=>"pera", "fruta2"=>"manzana"];
    echo "Esto es una variable objeto: $frutas->fruta1";
    echo "<br>";

?>