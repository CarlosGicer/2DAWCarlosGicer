<?php
    class ControladorArticulos {

        public static function mostrarchatGPT($articulo) {            
            apiChatGPT::chatGPT($articulo);

        }


    }
?>