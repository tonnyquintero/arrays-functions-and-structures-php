<?php

function es_legend($platzi_rank) {
    if ($platzi_rank >= 20000) {
        echo "Eres estudiante legend \n";
    }
    else {
        echo "tienes $platzi_rank puntos, aún no lacanzas el level \n";
    }
}

es_legend( (int) readline("Ingresa el numero de puntos que tienes: "));
echo"\n";
