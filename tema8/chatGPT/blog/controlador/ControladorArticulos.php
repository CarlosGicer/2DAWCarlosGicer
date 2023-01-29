<?php
    class ControladorArticulos {

        public static function mostrarArticulo() {   
           $articulo = ArticuloBD::getArticulo();
            VistaArticulos::pintarArticulos($articulo);

        }

    }
?>