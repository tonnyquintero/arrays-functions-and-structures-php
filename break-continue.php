<?php

$tiendita_de_cafe = array(
    "Americano" => 20,
    "Capuccino" => 6,
    "Latte" => 14.5,
    "Recalentado" => 5,
    "Macciato" => 10,
    "Americanini" => 20,
    "Capuccinini" => 6,
    "Lattini" => 14.5,
    "Macciatini" => 10
);

foreach ($tiendita_de_cafe as $cafe => $precio) {
    echo "Hemos encontrado: $cafe \n";

    if ($cafe == "Lattini") {
        echo "Ya se ha encontrado a Lattini!";
        break;
    }
}

echo "\n";

// si no le colocas == y le colocas un solo = la función no imprime
foreach ($tiendita_de_cafe as $cofi => $price) {
    if ($cofi == "Recalentado") {
        continue;
    }
    echo "el café $cofi es delicioso \n";
}

echo "\n";