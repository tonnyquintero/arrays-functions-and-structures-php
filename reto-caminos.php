<?php

// 2 -> 1
// 3 -> 2
// 4 -> 3
// 5 -> 5
// 6 -> 8
// 7 -> 13
// 8 -> 21
// 9 -> 34
// 10 -> 55


$numero_de_tienda = readline("Dime el numero de tienda:");
$anterior = 0;
$actual = 1;

for ($i=2; $i <= $numero_de_tienda ; $i++) { 
    
    $temporal = $actual;
    $actual = $actual + $anterior;
    $anterior = $temporal;

}
echo "Hay $actual formas distintas de llegar a la tienda ";


echo "\n";



