<?php
    class Repartidor{
        private $imagen;
        private $titulo;
        private $texto;
        private $parrafo;
        private $boton;
        private $enlace;
        
        public function __construct($imagen,$titulo,$texto,$parrafo,$boton,$enlace){
            $this->imagen = $imagen;
            $this->titulo = $titulo;
            $this->texto = $texto;
            $this->parrafo = $parrafo;
            $this->boton = $boton;
            $this->enlace = $enlace;
        }

        public static function obtenerRegistros(){
            $contenidoArchivo = file_get_contents('../data/repartidores.json');
            echo $contenidoArchivo;
        }
        public static function obtenerRegistro($indice){
            $contenidoArchivo = file_get_contents('../data/repartidores.json');
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
         * Get the value of titulo
         */ 
        public function getTitulo()
        {
                return $this->titulo;
        }

        /**
         * Set the value of titulo
         *
         * @return  self
         */ 
        public function setTitulo($titulo)
        {
                $this->titulo = $titulo;

                return $this;
        }

        /**
         * Get the value of texto
         */ 
        public function getTexto()
        {
                return $this->texto;
        }

        /**
         * Set the value of texto
         *
         * @return  self
         */ 
        public function setTexto($texto)
        {
                $this->texto = $texto;

                return $this;
        }

        /**
         * Get the value of parrafo
         */ 
        public function getParrafo()
        {
                return $this->parrafo;
        }

        /**
         * Set the value of parrafo
         *
         * @return  self
         */ 
        public function setParrafo($parrafo)
        {
                $this->parrafo = $parrafo;

                return $this;
        }

        /**
         * Get the value of boton
         */ 
        public function getBoton()
        {
                return $this->boton;
        }

        /**
         * Set the value of boton
         *
         * @return  self
         */ 
        public function setBoton($boton)
        {
                $this->boton = $boton;

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