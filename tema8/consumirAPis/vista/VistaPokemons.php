
<?php

class VistaPokemons
{

    public static function mostrarPokemonsAPI($pagina)
    {
        include "cabecera.php";

        $uri = "https://pokeapi.co/api/v2/pokemon?offset=$pagina&limit=20";
        $reqPrefs['http']['method'] = 'GET';
        $reqPrefs['http']['header'] = 'X-Auth-Token: ';
        $stream_context = stream_context_create($reqPrefs);
        $resultado = file_get_contents($uri, false, $stream_context);

        //Pasar de json a objeto php y recorrer los resultados
        if ($resultado != false) {
            $respPHP = json_decode($resultado);


            echo "  <div>
                        
            </div>";


            foreach ($respPHP->results as $pokemons) {
                $uri2 = $pokemons->url;
                $resultado2 = file_get_contents($uri2, false, $stream_context);



                if ($resultado2 != false) {
                    $pokemonData = json_decode($resultado2);

                    $pokemonTipo = $pokemonData->types[0]->type->name;
//---------------------COLOR FONDO CARD--------------------------------------------------------------------------
switch ($pokemonTipo) {
    case 'grass':
        $color =" background: rgb(255,255,255);
        background: radial-gradient(circle, rgba(255,255,255,1) 15%, rgba(125,191,146,1) 62%, rgba(0,130,42,1) 100%); ";
        break;
    case 'fire':
        $color ="background: rgb(255,255,255);
        background: radial-gradient(circle, rgba(255,255,255,1) 15%, rgba(255,137,84,1) 62%, rgba(255,61,0,1) 100%);";
        break;
    
    case 'water':
        $color ="  background: rgb(255,255,255);
        background: radial-gradient(circle, rgba(255,255,255,1) 15%, rgba(125,191,184,1) 62%, rgba(0,196,199,1) 100%); ";
        break;
            
    case 'bug':
        $color ="  background: rgb(255,255,255);
        background: radial-gradient(circle, rgba(255,255,255,1) 15%, rgba(116,199,0,1) 62%, rgba(116,199,0,1) 100%); ";
        break;
        
    case 'flying':
        $color ="  background: rgb(255,255,255);
        background: radial-gradient(circle, rgba(255,255,255,1) 15%, rgba(152,142,195,1) 62%, rgba(147,133,203,1) 100%); ";
        break;


    case 'normal':
        $color ="  background: rgb(255,255,255);
        background: radial-gradient(circle, rgba(255,255,255,1) 15%, rgba(199,198,200,1) 62%, rgba(175,175,175,1) 100%);  ";
        break;

    case 'poison':
        $color ="background: rgb(255,255,255);
        background: radial-gradient(circle, rgba(255,255,255,1) 15%, rgba(182,135,255,1) 62%, rgba(100,0,255,1) 100%);";
        break;

    case 'electric':
        $color ="background: rgb(255,255,255);
        background: radial-gradient(circle, rgba(255,255,255,1) 15%, rgba(237,255,120,1) 62%, rgba(221,255,0,1) 100%);";
        break;

    case 'ground':
        $color ="background: rgb(255,255,255);
        background: radial-gradient(circle, rgba(255,255,255,1) 15%, rgba(196,146,94,1) 62%, rgba(179,91,0,1) 100%);";
        break;

    case 'fairy':
        $color ="background: rgb(255,255,255);
        background: radial-gradient(circle, rgba(255,255,255,1) 15%, rgba(255,172,222,1) 62%, rgba(255,94,185,1) 100%);";
        break;

    case 'fighting':
        $color ="background: rgb(255,255,255);
        background: radial-gradient(circle, rgba(255,255,255,1) 15%, rgba(240,128,128,1) 62%, rgba(255,0,0,1) 100%);";
        break;

    case 'psychic':
        $color ="background: rgb(255,255,255);
        background: radial-gradient(circle, rgba(255,255,255,1) 15%, rgba(255,102,173,1) 62%, rgba(255,0,123,1) 100%); ";
        break;

    case 'ghost':
        $color ="background: rgb(255,255,255);
        background: radial-gradient(circle, rgba(255,255,255,1) 15%, rgba(99,86,116,1) 62%, rgba(59,40,84,1) 100%); ";
        break;

    case 'rock':
        $color ="background: rgb(255,255,255);
        background: radial-gradient(circle, rgba(255,255,255,1) 15%, rgba(125,92,60,1) 62%, rgba(110,68,27,1) 100%);";
        break;

    case 'dark':
        $color ="background: rgb(255,255,255);
        background: radial-gradient(circle, rgba(255,255,255,1) 0%, rgba(47,36,36,1) 66%, rgba(23,2,2,1) 100%);
        color: white;";
        break;

    case 'ice':
        $color ="background: rgb(255,255,255);
        background: radial-gradient(circle, rgba(255,255,255,1) 0%, rgba(181,255,251,1) 62%, rgba(100,255,247,1) 100%);";
        break;

    case 'steel':
        $color ="background: rgb(255,255,255);
        background: radial-gradient(circle, rgba(255,255,255,1) 0%, rgba(181,200,197,1) 62%, rgba(165,181,179,1) 100%);";
        break;

        case 'dragon':
            $color ="background: rgb(255,255,255);
            background: radial-gradient(circle, rgba(255,255,255,1) 0%, rgba(109,80,158,1) 62%, rgba(65,17,144,1) 100%);";
            break;
        
    default:
    $color ="background: rgb(255,255,255);
    background: radial-gradient(circle, rgba(255,255,255,1) 15%, rgba(255,102,173,1) 62%, rgba(255,0,123,1) 100%); ";
        break;
}
                  
//----------------------FIN-------------------------------------------------------------------------------------
                    "";
                    echo "
                    <div class='card border-dark me-5 mt-2 mb-3 ' style='width: 18rem; box-shadow: 0px 10px 10px black;".$color."'> 
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
