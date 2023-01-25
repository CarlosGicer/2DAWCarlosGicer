<?php

class VistaJuegos
{

    public static function pintarInicio()
    {
        include 'cabecera.php';
        echo '<h1>SELECCIONA EL JUEGO QUE QUIERES VER</h1>';

        include 'pie.php';
    }


    public static function pintarJuegos($id)
    {
        include 'cabecera.php';

        $uri = "https://store.steampowered.com/api/appdetails?appids=".$id."";
        $reqPrefs['http']['method'] = 'GET';
        $reqPrefs['http']['header'] = 'X-Auth-Token: ';
        $stream_context = stream_context_create($reqPrefs);
        $resultado = file_get_contents($uri, false, $stream_context);

        //Pasar de json a objeto php y recorrer los resultados
        if ($resultado != false) {
            $respPHP = json_decode($resultado);

            foreach ($respPHP as $juego) {

                echo" <div class='card mt-2 mb-3 bg-secondary'>
                    <img src='".$juego->data->header_image."' class='card-img-top mt-2' alt='...'>
                        <div class='card-body'>
                            <h2 class='card-title'>".$juego->data->name."</h2>

                            <h4> DESARROLLADORES:</h4>";
                            foreach ($juego->data->developers as $dev) {
                               echo" <p class='card-text'>".$dev."</p>";
                            };

                           echo" <p class='card-text'><small class='text-muted'>Edad minima para jugar: ".$juego->data->required_age." Año/s</small></p>
                        </div>
                    </div>";
            }
        }



        include 'pie.php';

    }

    public static function pintarNoticias($id) {


        $uri = "http://api.steampowered.com/ISteamNews/GetNewsForApp/v0002/?appid=".$id;

        $resultado = file_get_contents($uri, false);

        //$totalPaginas=0;
        //Pasar de json a objeto php y recorrer los resultados
        if ($resultado != false) {
            $respPHP = json_decode($resultado);

            //$totalPaginas = $respPHP->total_pages;
            $contador = 1;
              foreach($respPHP as $noticia) {
             //La fecha entra dentro del titulo
               
              echo "
              <h1>Noticia</h1>
            
               
                <h3 >".$noticia->newsitems[$contador]->title. "</h3>
                <h5> Autor: ".$noticia->newsitems[$contador]->author. "</h5>
                <p>".$noticia->newsitems[$contador]->contents. "</p>

                <button type='button' class='btn btn-primary mb-5' data-bs-toggle='modal' data-bs-target='#modalComentario'>
                    Añadir comentario
                </button>
              ";
             $contador++;


               //Modal
       echo" <div class='modal fade' id='modalComentario' tabindex='-1'>
       <div class='modal-dialog'>
           <div class='modal-content'>
           <div class='modal-header'>
               <h5 class='modal-title'>AÑADIR COMENTARIO</h5>
               <button type='button' class='btn-close' data-bs-dismiss='modal' aria-label='Close'></button>
           </div>
           <div class='modal-body'>
               <form action='enrutador.php' method='post' id='formComentario'>
                   <input type='hidden' name='idJuego' value='".$id."'>
                   <input type='hidden' name='idNoticia' value='".$noticia->newsitems[$contador]->gid."'>
                   <input type='hidden' name='accion' value='añadirComentario'>
                   Nombre
                   <input type='text' name='nombre' required><br><br>
                   Comentario
                   <textarea name='comentario' id='comentario' cols='30' rows='10' required></textarea>
               </form>
           </div>
           <div class='modal-footer'>
               <button type='button' class='btn btn-secondary' data-bs-dismiss='modal'>CERRAR</button>
               <button type='submit' form='formComentario' class='btn btn-primary' >AÑADIR</button>
           </div>
           </div>
       </div>
       </div> ";

            }
        }


      

        include "pie.php";
    }
   
}
