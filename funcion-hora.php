<?php

function getHora() {

    return date("h:i a \n");
}


echo "Hola, me podrías decir la hora? \n";
echo "claro, son las " .  getHora();

echo "\n";

?>