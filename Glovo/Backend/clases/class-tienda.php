<?php
    class Tienda{
        private $imagen;
        private $nombre;
        private $enlace;
        public function __construct($imagen,$nombre,$enlace){
            $this->imagen = $imagen;
            $this->nombre = $nombre;
            $this->enlace = $enlace;
        }
        public static function obtenerTiendas(){
            $contenidoArchivo = file_get_contents('../data/tiendas.json');
            echo $contenidoArchivo;
        }
        public static function obtenerTienda($indice){
            $contenidoArchivo = file_get_contents('../data/tiendas.json');
            $usuarios = json_decode($contenidoArchivo, true);
            echo json_encode($usuarios[$indice]);

        }

        /**
         * Get the value of imagen
         */ 
        public function getImagen()
        {
                return $this->imagen;
        }

        /**
         * Set the value of imagen
         *
         * @return  self
         */ 
        public function setImagen($imagen)
        {
                $this->imagen = $imagen;

                return $this;
        }

        /**
         * Get the value of nombre
         */ 
        public function getNombre()
        {
                return $this->nombre;
        }

        /**
         * Set the value of nombre
         *
         * @return  self
         */ 
        public function setNombre($nombre)
        {
                $this->nombre = $nombre;

                return $this;
        }

        /**
         * Get the value of enlace
         */ 
        public function getEnlace()
        {
                return $this->enlace;
        }

        /**
         * Set the value of enlace
         *
         * @return  self
         */ 
        public function setEnlace($enlace)
        {
                $this->enlace = $enlace;

                return $this;
        }
    }



?>