<?php

    $meses = array('Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre');
     echo "<h1>Recorrido con for</h1>";
    for($i = 0; $i<count($meses); $i++){
        echo $meses[$i].'<br>';
    }

    echo "<br>";
    echo  "<h1>Recorrido con while</h1>";

    $contador = 0;
    while($contador<count($meses)){
        echo $meses[$contador].'<br>';
        $contador++;
    } 
?>