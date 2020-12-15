<?php
 include("Ejercicio19-Conexion.php");
$conn = mysqli_connect($host, $user , $pw , $db , $puerto);

if(!$conn){
    die("Conexion fallida al servidor : ".mysqli_connect_error());
}

$consulta = "insert into codigof (nombre, pw) values ('".$_POST['nombre']."','".$_POST['pw']."')";

$resultado = (mysqli_query($conn, $consulta));
if(!$resultado){
    if(mysqli_query($conn, $consulta)){

    }
    else{
        echo "Error al ingresar los datos ". $consulta. "<br>".mysqli_error($conn);
    }
}
else 
{
    echo '<script type="text/javascript">alert("Nuevo registro creado exitosamente")</script>';
}
    mysqli_close($conn);

?>