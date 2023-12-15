<?php

$possible_words = ["arranque", "torre", "asteroide", "javascript", 
"scarface", "videojuego", "francia", "zidane", "pelota", "barco"];

define("MAX_ATTEMPS", 6);


echo "Juego del ahorcado! \n \n";

//Inicializamos el juego
$chosen_word = $possible_words[ rand(0, count($possible_words) - 1) ];



