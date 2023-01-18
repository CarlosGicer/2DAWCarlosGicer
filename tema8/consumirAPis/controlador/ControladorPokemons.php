<?php
    class ControladorPokemons {

        public static function mostrarPokemons($pagina) {            
            VistaPokemons::mostrarPokemonsAPI($pagina);

        }

        public static function mostrarPokemon($id) {
            VistaPokemons::mostrarPokemonAPI($id);
        }

    }
