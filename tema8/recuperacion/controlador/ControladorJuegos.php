<?php
    class ControladorJuegos {

        public static function mostrarJuegos($id) {            
            VistaJuegos::pintarJuegos($id);

        }
        public static function mostrarNoticias($id) {            
            VistaJuegos::pintarNoticias($id);

        }

        public static function mostraComentarios( $idJuego,$nombre,$comentario, $idNoticia) {            
          ComentarioBD::guardarComentario($idJuego,$nombre,$comentario, $idNoticia);
     
        }
        public static function mostrarInicio() {            
            VistaJuegos::pintarInicio();

        }


    }
?>