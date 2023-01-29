<?php
    class VistaArticulos {

        public static function pintarArticulos($articulos) {        
            include('cabecera.php'); 
            
            foreach($articulos as $articulo){

              echo "<center>
               <div class='card mb-3' style='max-width: 1500px;'>
                    <div class='row g-0'>
                        <div class='col-md-4'>
                            <img src='".$articulo->getImagen()."' class='img-fluid rounded-start' alt=''>
                        </div>
                        <div class='col-md-8'>
                            <div class='card-body'>
                                <h5 class='card-title'".$articulo->getTitulo()."</h5>
                                <p class='card-text'>".$articulo->getTexto()."</p>
                                <p class='card-text'><small class='text-muted'><b>".$articulo->getFecha()."</b></small></p>
                            </div>
                        </div>
                    </div>
                </div>
               
                </center>";
            }
           
            include('pie.php'); 
        }

    }
?>
