<?php

    /*  
    Ejemplo 1 - Como lo hariamos sin POO
    $nombre = 'Carlos';
    $edad = 23;
    $pais = 'México';
    echo $nombre;
    */

    class Persona {
        public $nombre;
        public $edad;
        public $pais;

        public function mostrarInformacion(){
            echo 'Hola Mundo';
        }

    }

    $carlos = new Persona;

    $carlos->nombre = 'Carlos Arturo';
    $carlos->edad = '23';
    $carlos->pais='Mexico';

    $carlos->mostrarInformacion();

    $alejandro = new Persona;

    $alejandro->nombre = 'Alejandro';
    $alejandro->edad = 30;
    $alejandro->pais = 'España';
?>