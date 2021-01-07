<?php

    

    try{
        $conexion = new PDO('mysql:host=localhost;dbname=prueba_consola', 'root', '');

        /* $resultados = $conexion->query( 'select * from usuarios');

        foreach($resultados as $fila){
            echo $fila['nombre'].'<br>';
        } */

        //PREPARED STATEMENTS

        $statement = $conexion->prepare('SELECT * FROM usuarios');
        $statement->execute(array(
        ':id2' => 2
        ));

        $resultados = $statement->fetchAll();
        foreach($resultados as $usuario){
             echo $usuario['nombre'].'<br>';
        }



    }catch(PDOException $e){
        echo "Error: " .$e->getMessage();
    }

?> 