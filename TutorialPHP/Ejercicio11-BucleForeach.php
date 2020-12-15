<?php

    //array predefinido

    $predefinido = array("elemento1" , "elemento2");


    foreach( $predefinido as $elementos)
    {
        echo "<br>".$elementos;
    }

    //array personalizado o asociativo

    $asoci = array("clave1" => "elemento1", "clave2" => "elemento2");

    foreach($asoci as $claves => $elemento)
    {
        echo "<br>".$claves."=".$elemento;

    }
?>
