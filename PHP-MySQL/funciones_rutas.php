<?php

    echo pathinfo('documento.txt', PATHINFO_BASENAME);
    echo '<br>';
    echo pathinfo('usuario/carpeta/documento.txt', PATHINFO_DIRNAME);
    echo '<br>';
    echo pathinfo('documento.txt', PATHINFO_EXTENSION);
    echo '<br>';
    echo pathinfo('documento.txt', PATHINFO_FILENAME);
    echo '<br>';
    $resultados = glob('*.php');
    print_r($resultados);
    echo '<br>';
    echo basename('carpeta1/carpeta2/archivo.php');
    echo '<br>';
    echo dirname('carpeta1/carpeta2/archivo.php');

?>