<?php

    class Persona{
        public static $dia = '6 de enero 2020';

        public function saludo(){
            return 'Hola buen día';
        }
    }

    //$carlos = new Persona;
    echo Persona::$dia;
?>