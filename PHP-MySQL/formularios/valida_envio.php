<?php

    if(isset($_POST['submit'])){
        echo "Se han enviado los datos correctamente";
        print_r($_POST['submit']);
    }else{
        echo "No se han enviado los datos";
    }





    if($_SERVER['REQUEST_METHOD']== 'POST') {
        echo "Se enviaron por POST";
    }else{
        echo "Se enviaron por GET";
    }

?>