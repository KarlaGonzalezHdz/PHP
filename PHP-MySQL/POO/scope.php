<?php

    /* 
        Public - Pueden ser accedidos desde cualquier parte, ya sea dentro o fuera de nuestra clase.

        Protected - Pueden ser accedidos desde dentro de la clase que heredaron. Pero no fuuera de estas.

        Private - Solo pueden ser accedidos desde dentro de la clase en la que fueron creados.
        Es decir que no podemos acceder a ellos desde otras clase que heredo y tampoco podemos acceder desde fuera de las clases
    */

    class Usuario {
        public $nombre;
        public $correo;
        
        //protected, public , private
        function __construct($nombre, $correo){
            $this->nombre = $nombre;
            $this->correo = $correo;
        }

        public function mostrarInfo(){
            return $this->correo;
        }
    }

    $carlos = new Usuario('Carlos', 'carlos@gmail.com');

    echo $carlos->mostrarInfo();

?>