<?php
    include('Truco.php');

    class Juegos{
        private $nombre;
        private $genero;
        private $plataforma;
        private $trucos;

        //Constructor

        public function __construct($nombre = "Sin Nombre", $genero = "RPG", $plataforma = "PC"){

            $this->nombre = $nombre;
            $this->genero = $genero;
            $this->plataforma = $plataforma;
            $this->trucos = array();
        }

        //Getters Y Setters

        public function getNombre(){
            return $this->nombre;
        }
 
        public function getGenero(){
            return $this->genero;
        }

        public function getPlataforma(){
            return $this->plataforma;
        }
 
        public function getTrucos(){
            return $this->trucos;
        }
 
        public function SetNombre($nombre){
            $this->nombre = $nombre;
        }
 
        public function SetGenero($genero){
            $this->genero = $genero;
        }
 
        public function SetPlataforma($plataforma){
            $this->plataforma = $plataforma;
        }

        public function SetTrucos($trucos){
            $this->trucos = $trucos;
        }
 
        //Pintar
 
        public function pintar(){
            echo "<p> Nombre: ".$this->nombre." Genero: ".$this->genero."</p>";
            echo "<p> Plataforma: ".$this->plataforma;
            foreach ($this->trucos as $clave) {
              $clave->pintar();
            }
        }

        //Añadir trucos

        public function addTrucos($truco){
            array_push($this->trucos,$truco);
        }

        //Eliminar trucos

        public function deleteTrucos($truco){
            foreach ($this->trucos as $clave => $value) {
                if($value==$truco)
                unset($this->trucos[$value]);
            }


        }
    }

    $truco1 = new Truco("Truco1", "Descripcion");

?>