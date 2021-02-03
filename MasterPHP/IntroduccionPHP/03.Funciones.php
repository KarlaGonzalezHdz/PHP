<?php
    //Funciones sin parametros  
    function saludo(){
        echo "Hola <br>";
    }

    saludo();

    //Funciones con parametros

    function despedida($adios){
        echo $adios."<br>";
    }

    despedida("Adios Karla");


    //Funciones con retorno

    function retorno($retornar){
        return $retornar;
    }


     echo retorno("esta es una funcion con return");

?>