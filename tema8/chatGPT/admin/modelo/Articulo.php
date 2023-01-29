<?php

    class Articulo {

        private $idArticulo;
        private $titulo;
        private $texto;
        private $imagen;
        private $fecha;
   
        public function __construct($idArticulo="", $titulo="", $texto="",$imagen="", $fecha="") {
        
            $this->idArticulo = $idArticulo;
            $this->titulo = $titulo;
            $this->texto = $texto;
            $this->imagen = $imagen;
            $this->fecha = $fecha;

        }

        /**
         * Get the value of idArticulo
         */ 
        public function getIdArticulo()
        {
                return $this->idArticulo;
        }

        /**
         * Set the value of idArticulo
         *
         * @return  self
         */ 
        public function setIdArticulo($idArticulo)
        {
                $this->idArticulo = $idArticulo;

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
         * Get the value of fecha
         */ 
        public function getFecha()
        {
                return $this->fecha;
        }

        /**
         * Set the value of fecha
         *
         * @return  self
         */ 
        public function setFecha($fecha)
        {
                $this->fecha = $fecha;

                return $this;
        }
}
?>