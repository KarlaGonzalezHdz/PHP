<?php
    $amigo = array('telefono' => 831279856 , 'edad' => 20 , 'pais' => 'Mexico');

    extract($amigo);

    echo $edad.'<br>';
    echo $telefono.'<br>';
    echo $pais.'<br>';

    $semana = array('Lunes' ,'Martes', 'Miercoles', 'Jueves' , 'Viernes', 'Sabado' , 'Domingo');

    $ultimo_dia =  array_pop($semana);

    foreach ($semana as $dia){
        echo $dia.'<br>';
    }

    echo $ultimo_dia.'<br>';

    echo join(' - ' , $semana);
    echo '<br>';
    echo count($semana);
    echo '<br>';
    echo sort($semana);
    echo '<br>';
    echo rsort($semana)
?>
