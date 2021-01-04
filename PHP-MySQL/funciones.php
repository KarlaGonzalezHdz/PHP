<?php

    /*    
    Una funcion es un bloque de codigo que nosotros podemos ejecutar para programar cuando sea necesario.
    count(); 
    sort();
    rsort();
    var_dump();
    print_r();
    */
   
    function saludo($nombre){
       return "Saludo, $nombre <br>";
    }

    echo saludo('Karla');

    function sumar($numero1 , $numero2){
        $resultado = $numero1 + $numero2;
        return $resultado.'<br>';
    }

    $resultado = sumar(10,15);
?>
