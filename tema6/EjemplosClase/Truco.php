<?php

    class Truco{
        private $nombre;
        private $descripcion;

        //Constructor 

        public function __construct($nombre, $descripcion){

            $this->nombre = $nombre;
            $this->descripcion = $descripcion;
        }

        //Getters Y Setters

        public function getNombre(){
           return $this->nombre;
        }

        public function getDescripcion(){
            return $this->descripcion;
        }


        public function SetNombre($nombre){
            $this->nombre = $nombre;
        }

        public function SetDescripcion($descripcion){
            $this->descripcion = $descripcion;
        }


        //Pintar

        public function pintar(){
            echo "Nombre: ".$this->nombre." descripcion: ".$this->descripcion;
        }
    }

?>