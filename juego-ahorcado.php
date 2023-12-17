<?php

function clear() {
    if (PHP_OS === "WINNT") {
        system("cls");
    } else {
        system("clear");
    }
};

$possible_words = ["arranque", "torre", "asteroide", "javascript", 
"scarface", "videojuego", "francia", "zidane", "pelota", "barco"];

define("MAX_ATTEMPS", 6);


echo "Juego del ahorcado! \n \n";

//Inicializamos el juego
$chosen_word = $possible_words[ rand(0, count($possible_words) - 1) ];
$chosen_word = strtolower($chosen_word);
$word_length = strlen($chosen_word);
$discovered_letters = str_pad("", $word_length, "_");
$attempts = 0;

// Codigo de Reatax

function print_man() {

    global $attempts;
    
    switch ($attempts) {

        case 0:
            echo "
            +---+
            |   |
                |
                |
                |
                |
            =========
            ";
            break;
           
        case 1:
            echo "
            +---+
            |   |
            O   |
                |
                |
                |
            =========
            ";
            break;

        case 2:
            echo "
            +---+
            |   |
            O   |
            |   |
                |
                |
            =========
            ";
            break;

        case 3:
            echo "
            +---+
            |   |
            O   |
           /|   |
                |
                |
            =========
            ";
            break;

        case 4:
            echo "
            +---+
            |   |
            O   |
           /|\  |
                |
                |
            =========
            ";
            break;

        case 5:
            echo "
            +---+
            |   |
            O   |
           /|\  |
           /    |
                |
            =========
            ";
            break;

        case 6:
            echo "
            Me mataste we
            +---+
            |   |
            O   |
           /|\  |
           / \  |
                |
            =========
            ";
            break;

    }

    echo "\n\n";
}

// Fin del codigo de Retax

do {

    echo "Palabra de " . $word_length . " letras \n\n";
    echo $discovered_letters . "\n\n";

    //Pedimos al usuario que escriba 
    $player_letter = readline("Escribe una letra: ");
    $player_letter = strtolower($player_letter);

    if (str_contains($chosen_word, $player_letter) ) {
        //verificamos todas las ocurrencias de esta letra para reemplazarla
        $offset = 0;
        while ( ($letter_position = strpos($chosen_word, $player_letter,
                $offset) ) !== false ) {
            
                    $discovered_letters[$letter_position] = $player_letter;
                    $offset = $letter_position + 1;
        }
    } else {

        clear();
        $attempts++;
        echo "letra incorrecta. Te quedan " . (MAX_ATTEMPS - $attempts) . " intentos";
        print_man();
        sleep(2);
    }
    clear();

} while( $attempts < MAX_ATTEMPS && $discovered_letters != $chosen_word );

clear();

if ($attempts < MAX_ATTEMPS) {
    echo "Felicidades has adivinado la palabra 😁 \n\n";
} else {
    echo "Suerte para la proxima amig@ 😐 \n\n";
};

echo "La palabra es: $chosen_word \n\n";
echo "Tu descubriste $discovered_letters";

echo "\n";