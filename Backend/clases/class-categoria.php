<?php
    class Categoria{
        private $imagen;
        private $negocio;
        private $enlace;

        public function __construct($imagen,$negocio,$enlace){
            $this->imagen = $imagen;
            $this->negocio = $negocio;
            $this->enlace = $enlace;
        }

        public static function obtenerCategorias(){
            $contenidoArchivo = file_get_contents('../data/categorias.json');
            echo $contenidoArchivo;
        }
        public static function obtenerCategoria($indice){
            $contenidoArchivo = file_get_contents('../data/categorias.json');
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
         * Get the value of negocio
         */ 
        public function getNegocio()
        {
                return $this->negocio;
        }

        /**
         * Set the value of negocio
         *
         * @return  self
         */ 
        public function setNegocio($negocio)
        {
                $this->negocio = $negocio;

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