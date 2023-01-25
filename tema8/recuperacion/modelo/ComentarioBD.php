<?php

    class ComentarioBD {


        public static function guardarComentario( $idJuego,$nombre,$comentario, $idNoticia) {

            $conexion = ConexionBD::conectar();
            
            $coleccion = $conexion->comentarios;
            
            $comentarioID = $conexion->comentarios->findOne(
                [],
                [
                    'sort' => ['idComentario' => -1],
                ]);
            if (isset($comentarioID)){
                $idValue = $comentarioID['idComentario'];
            }else{
                $idValue = 0;
            }

            $insertOneResult = $coleccion->insertOne(
                ['idComentario' => intVal($idValue)+1,
                'idJuego'=> intVal($idJuego),
                'nombre'=>($nombre),
                '$set' => ['comentario' => ($comentario)] ,
                'idNoticia'=> intVal($idNoticia),
                'upsert' => true]  //Inserta si no encuentra. Modifica si lo encuentra
            );

            ConexionBD::cerrar();

        }

        public static function getComentario($idComentario) {
            $conexion = ConexionBD::conectar();
            
            $coleccion = $conexion->comentarios;

            $comentarios = $coleccion->findOne(['idComentario' => intVal($idComentario)]);

            if ($comentarios == null)
                return "-";
            else
                return $comentarios['comentarios'];
        }
    }

?>
