<?php

    $conexion = new mysqli('localhost', 'root', '', 'prueba_datos');

    if ($conexion->connect_errno){
        die ('Lo siento hubo un problema con el servidor');
    }else{
        $sql = 'SELECT * FROM usuarios';
        $resultados = $conexion->query($sql);
        
        if ($resultados->num_rows){
            while($fila = $resultados->fetch_assoc()){
                echo $fila['id'].' - '.$fila['Nombre'].' - '.$fila['edad'].'<br>';
            }

        }else{
            echo 'No hay datos';
        }


    }

?>