
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>

</body>

</html>

<?php

function colorTipo($pokemonTipo){
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

    return $color;
};
?>
