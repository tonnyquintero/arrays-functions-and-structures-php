<?php

function get_pokemon() {
    $numero_aleatorio = rand(1,7);

    switch ($numero_aleatorio) {
        case 1 :
            echo "pikachu \n";
            break;
        case 2 :
            echo "charmander \n";
            break;
        case 3 :
            echo "bulbasor \n";
            break;
        case 4 :
            echo "newtwo \n";
            break;
        case 5 :
            echo "meow \n";
            break;
        
        default:
            echo "no se encontraron pokemones \n";
            break;
    }
}

for ($i=0; $i < 6; $i++) { 
    get_pokemon();
}


echo "\n";