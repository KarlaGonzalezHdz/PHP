<?php
    $texto = '< > & " " ';
    $variable = "  hola   karla , ";
    echo htmlspecialchars($texto);
    echo '<br>';
    echo trim($variable); // elimina los espacios de una variable que estan al principio y final
    echo '<br>';
    echo strlen($variable);
    echo '<br>';
    echo substr($variable, 0,7);
    echo '<br>';
    echo strtoupper($variable);
    echo '<br>';
    echo strtolower($variable);
    echo '<br>';
    echo strpos($variable , 'l');
?>