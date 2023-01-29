<?php
    class ControladorArticulo {

        public static function mostrarchatGPT($articulo) {            
            apiChatGPT::chatGPT($articulo);

        }

        public static function guardarArticulo($articulo) {   
            $articulo = new Articulo(0,$articulo['titulo'],$articulo['texto'],$articulo['imagen'],$articulo['fecha']) ;        
            ArticuloBD::addArticulo($articulo);
            VistaFormulario::pintarFormulario();


        }

    }
?>