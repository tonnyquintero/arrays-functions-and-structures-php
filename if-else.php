<?php

$asientos_disponibles = 0;
$es_enchufado = true;

if ($asientos_disponibles > 0) {
    echo "Puedes entrar a ver la peli 😁" . "\n";
} else {
    echo "Lo sentimos no nos quedan puestos disponibles 😐" . "\n";
}

// else if => Agrega una condicion mas a la función si no se cumple la primera se puede cumplir la segunda sin pasar al else

if ($asientos_disponibles > 0) {
    echo "Puedes entrar a ver la peli 😁" . "\n";
} else if ($es_enchufado == true) {
    echo "Puedes ver la peli maldito enchufado" . "\n";
}
 else {
    echo "Lo sentimos no nos quedan puestos disponibles 😐" . "\n";
}