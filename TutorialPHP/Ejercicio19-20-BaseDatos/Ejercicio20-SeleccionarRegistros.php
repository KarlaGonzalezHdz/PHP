<?php
    include("Ejercicio19-Conexion.php");

    $conn = mysqli_connect($host, $user , $pw , $db , $puerto);

    if(!$conn){
        die("Conexion fallida al servidor : ".mysqli_connect_error());
    }

    $consulta = ("SELECT * FROM codigof") or die (mysqli_error());

    $resultado = (mysqli_query($conn, $consulta));

    while($reg=mysqli_fetch_array($resultado)){
        echo $reg['nombre']."<br>";
        echo $reg['pw']."<br>";
    }

?>