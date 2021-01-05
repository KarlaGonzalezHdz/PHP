<?php

class Persona {
    public $nombre;
    public $edad;
    public $pais;

    function __construct($nombre, $edad, $pais){
        $this->nombre = $nombre;
        $this->edad = $edad;
        $this->pais = $pais;
    }

    public function mostrarInformacion(){
        echo  $this->nombre. ' tiene '.$this->edad.' años de edad y es de '.$this->pais.'<br>';
    }

}

     $carlos = new Persona('Carlos Arturo', 23 , 'Mexico');  
     $alejandro = new Persona('Alejandro', 30 , 'España');
 /*   $carlos->nombre = 'Carlos Arturo';
    $carlos->edad = '23';
    $carlos->pais='Mexico'; */

    $carlos->mostrarInformacion();
    $alejandro->mostrarInformacion();
   /*  $alejandro = new Persona;  
    $alejandro->nombre = 'Alejandro';
    $alejandro->edad = 30;
    $alejandro->pais = 'España' */;
   // $alejandro->mostrarInformacion();
?>