<?php

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
    $attempts++;
    echo "letra incorrecta. Te quedan " . (MAX_ATTEMPS - $attempts) . " intentos";

}

echo "\n";