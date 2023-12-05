<?php

// Se pueden dejar los parámetros con valor por defecto por si no llega nada
function suma($a = 1 , $b = 1) {
    echo "El resultado de $a + $b es: " . $a + $b . "\n";
}

suma(12);
echo "\n";

$lote1 = [75, 2];
$lote2 = [4, 5];

//array unpacking => traer la data del array por medio de 3 puntos
$resultado = [...$lote1, ...$lote2];
var_dump($resultado);

suma(...$lote1);
echo "\n";

//infinitos parámetros con esta función
function suma_infinita(...$params) {
    $sum = 0;

    foreach($params as $numer) {
        $sum += $numer;
    }

    echo "La sumatoria es: $sum \n";
}

suma_infinita(1, 2, 3, 78);
suma_infinita(1, 2);
suma_infinita(1, 2, 3, 78, 12000);

echo "\n";
