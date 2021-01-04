<?php
    $texto = 'Carlos';
    $numero = 10;
    $numero2 = '5';
    $arreglo = array('Carlos','Cesar', 'Alejandro');
    $arreglo_asociativo = array('nombre' => 'Carlos' , 'edad' => 20);
    $boleano = false;


    var_dump($texto); // Conocer el valor y las propiedades
    var_dump($numero);
    var_dump($numero2);
    var_dump($arreglo);
    var_dump($arreglo_asociativo);
    var_dump($boleano);


    print_r($texto);
    echo '<br>';
    print_r($numero);
    echo '<br>';
    print_r($numero2);
    echo '<br>';
    print_r($arreglo);
    echo '<br>';
    print_r($arreglo_asociativo);
    echo '<br>';
    print_r($boleano);
?>