<?php
    class RegistrarUsuario{
        private $nombre;
        private $correo;
        private $contrasena;

        public function __construct($nombre,$correo,$contrasena){
                $this->nombre = $nombre;
                $this->correo = $correo;
                $this->contrasena = $contrasena;
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
         * Get the value of correo
         */ 
        public function getCorreo()
        {
                return $this->correo;
        }

        /**
         * Set the value of correo
         *
         * @return  self
         */ 
        public function setCorreo($correo)
        {
                $this->correo = $correo;

                return $this;
        }

        /**
         * Get the value of contrasena
         */ 
        public function getContrasena()
        {
                return $this->contrasena;
        }

        /**
         * Set the value of contrasena
         *
         * @return  self
         */ 
        public function setContrasena($contrasena)
        {
                $this->contrasena = $contrasena;

                return $this;
        }
        public function __toString(){
                return $this->nombre ." ".$this->correo ." ".$this->contrasena. "";
        }
        
        public function guardarRegistro(){
                $contenidoArchivo = file_get_contents("../data/registros.json");
                $registros = json_decode($contenidoArchivo, true);
                $registros[] = array(
                    "nombre" => $this->nombre,
                    "correo" => $this->correo,
                    "contrasena" => $this->contrasena
                );
                $archivo = fopen("../data/registros.json","w");
                fwrite($archivo, json_encode($registros));
                fclose($archivo);
            }
    
        public static function obtenerRegistros(){
                    $contenidoArchivo = file_get_contents("../data/registros.json");
                    echo $contenidoArchivo;
            }

        public static function obtenerRegistro($indice){
                $contenidoArchivo = file_get_contents("../data/registros.json");
                $registros = json_decode($contenidoArchivo, true);
                echo json_encode($registros[$indice]);
                
        }

    }



?>
