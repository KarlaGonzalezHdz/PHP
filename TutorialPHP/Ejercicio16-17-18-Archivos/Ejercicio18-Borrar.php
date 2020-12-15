<?php

    $filename = $_POST['archivo'];
    unlink($filename);
    echo "<h1>El archivo ha sido eliminado con exito</h1>";
?>