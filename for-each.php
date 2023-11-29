<?php

$tiendita_de_cafe = array(
    "Americano" => 20,
    "Capuccino" => 6,
    "Latte" => 14.5,
    "Macciato" => 10
);

// Puede recorrer un array dictandole el subindice y el => valor
foreach ($tiendita_de_cafe as $cafe => $price) {
    echo "El café $cafe tiene un costo de $ $price USD \n";
}

echo "\n";