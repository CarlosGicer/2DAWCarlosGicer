
<?php

class VistaPokemons
{

    public static function mostrarPokemonsAPI($pagina)
    {


        include "cabecera.php";


        echo "";



        $uri = "https://pokeapi.co/api/v2/pokemon?offset=$pagina&limit=20";
        $reqPrefs['http']['method'] = 'GET';
        $reqPrefs['http']['header'] = 'X-Auth-Token: ';
        $stream_context = stream_context_create($reqPrefs);
        $resultado = file_get_contents($uri, false, $stream_context);

        //Pasar de json a objeto php y recorrer los resultados
        if ($resultado != false) {
            $respPHP = json_decode($resultado);

            //Pagina siguiente
            $nextPage = $respPHP->next;

            echo "  <div>
                        
            </div>";


            foreach ($respPHP->results as $pokemons) {
                $uri2 = $pokemons->url;
                $resultado2 = file_get_contents($uri2, false, $stream_context);



                if ($resultado2 != false) {
                    $pokemonData = json_decode($resultado2);
                    "";
                    echo "
                    <div class='card border-dark me-5 mt-2 mb-3 ' style='width: 18rem; box-shadow: 0px 10px 10px black;  background: rgb(255,255,255);
                    background: radial-gradient(circle, rgba(255,255,255,1) 32%, rgba(129,235,249,1) 47%, rgba(161,204,236,1) 68%, rgba(160,244,204,1) 100%);'> 
                    <a href='enrutador.php?accion=mostrarDetallePokemon&id=" . $pokemonData->id . "' class='btn'><img src='https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/pokemon/other/official-artwork/" . $pokemonData->id . ".png' class='card-img-top' alt='...'> </a> 
                        <div class='card-body '>
                        <p class='card-text'> #" . $pokemonData->id . "</p>
                        <b class='card-title'>{$pokemonData->name}   <a href='enrutador.php?accion=mostrarDetallePokemon&id=" . $pokemonData->id . "' class='btn'> ℹ️   ver </a>
                        </b>   
                        </div>

                      
                       
                    </div>
                    ";
                }
            }
        }
        // botones
        echo "</div>";
        echo "<center>";

        echo "<a class='btn' href='enrutador.php?accion=mostrarPokemonsPagina&pagina=" . (0) . "'>↩️</a>";

        echo "&nbsp;";

        if ($pagina > 0) {
            echo "<a class='btn' href='enrutador.php?accion=mostrarPokemonsPagina&pagina=" . ($pagina - 20) . "'>⬅️</a>";
        } else {
            echo "<a class='btn disabled' href='enrutador.php?accion=mostrarPokemonsPagina&pagina=" . ($pagina - 20) . "'>⬅️</a>";
        }

        echo "&nbsp;";

        if ($pagina < 1237) {
            echo "<a class='btn' href='enrutador.php?accion=mostrarPokemonsPagina&pagina=" . ($pagina + 20) . "'>➡️</a>";
        } else {
            echo "<a class='btn disabled' href='enrutador.php?accion=mostrarPokemonsPagina&pagina=" . ($pagina + 20) . "'>➡️</a>";
        }

        echo "&nbsp;";

        echo "<a class='btn' href='enrutador.php?accion=mostrarPokemonsPagina&pagina=" . (1237) . "'>↪️</a>";

        echo "</center>";


        include "pie.php";
    }


    public static function mostrarPokemonAPI($id)
    {
        include "cabecera.php";

        $uri = "https://pokeapi.co/api/v2/pokemon/$id";
        $reqPrefs['http']['method'] = 'GET';
        $reqPrefs['http']['header'] = 'X-Auth-Token: ';
        $stream_context = stream_context_create($reqPrefs);
        $resultado = file_get_contents($uri, false, $stream_context);


        echo " <div class=' row mt-1 align-items-center justify-content-center'>
        <div class =' col-md-6 '>";


        //Pasar de json a objeto php y recorrer los resultados
        if ($resultado != false) {
            $pokemonData = json_decode($resultado);

            if ($resultado != false) {
                $pokemonData = json_decode($resultado);
                "";
                echo "
                    <div class='card border-dark me-5 mt-2 mb-3 ' style='width: 18rem; box-shadow: 0px 10px 10px black;  background: rgb(255,255,255);
                    background: radial-gradient(circle, rgba(255,255,255,1) 32%, rgba(129,235,249,1) 47%, rgba(161,204,236,1) 68%, rgba(160,244,204,1) 100%);'> 
                        <img src='https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/pokemon/other/official-artwork/" . $pokemonData->id . ".png' class='card-img-top' alt='...'>
                        <div class='card-body '>
                        <p class='card-text'> #" . $pokemonData->id . "</p>
                        <b class='card-title'>{$pokemonData->name}</b>   
                        </div>
                    </div>";

                echo " </div>
                
                    <div class=' col-md-6 mt-1'>
                    
                    <div class=' row mt-1 mb-2 ms-5 align-items-center justify-content-center'>
                    <div class='card mb-3' style='max-width: 540px;'>
                    <div class='row g-0'>
                        <div class='col-md-4'>
                        <img src='" . $pokemonData->sprites->front_default . "' class='w-100 img-fluid rounded-start' alt='...'>
                        <img src='" . $pokemonData->sprites->back_default . "' class='w-100 img-fluid rounded-start' alt='...'>
                        </div>
                        <div class='col-md-8'>
                        <div class='card-body'>
                            <h5 class='card-title'>Datos</h5>
        
                            <p class='card-text'><b>Nombre:</b><br> " . $pokemonData->name . "</p>

                            <p class='card-text'><b>Tipos:</b> <br>";

                foreach ($pokemonData->types as $tipos) {
                    echo "" . $tipos->type->name . "<br>";
                };
                echo "</p>";

                echo " <p class='card-text'><b>Estadisticas:</b><br> ";

                foreach ($pokemonData->stats as $estadisticas) {
                    echo "" . $estadisticas->stat->name . ": ";
                    echo "" . $estadisticas->base_stat . "<br> ";
                };
                echo "</p>";


                echo " <p class='card-text'><small class='text-muted'>Numero de Pokedex: " . $pokemonData->id . "</small></p>
                        </div>
                        </div>
                    </div>
                    </div>
                
                
                    </div>
                
                </div>";

                include "pie.php";
            }
        }
    }
}
