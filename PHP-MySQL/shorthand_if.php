<?php
  //  isset(VARIABLE)) - ISSET NOS DICE SI UNA VARIABLE TIENE UN VALOR

    // (condicion) ?  $edad : 'LO QUE NO SE CUMPLE'

    $edad = 18; 
    $edad = (isset($edad)) ? $edad : 'El usuario no establecio su edad';

    echo 'Edad '.$edad;

?>