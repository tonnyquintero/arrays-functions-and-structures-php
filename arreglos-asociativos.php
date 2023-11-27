<?php

$cafes = array(
    "Capuccino" => 50,
    "Latte" => 49,
    "Americano" => 70
);

echo "El precio del cafe americano es de {$cafes["Americano"]}". "\n";

// arrays dentro de arrays

$personas = array(
    "Carlos" => array(
        "edad" => 20,
        "apellido" => "Aparicio",
        "juega deporte" => array(
            "futbol" => "Inter de Milan", 
            "beisbol" => "Mets de NY" ,
            "basket" => "Miami Heat"
        ) 
    ),
    "Erduin" => array(
        "edad" => 78,
        "apellido" => "Ortega",
        "juega deporte" => "verdadero" 
    ),
);

echo "El apellido de Carlos es: " . $personas["Carlos"]["apellido"] . " Y es " . $personas["Carlos"]["juega deporte"]["futbol"] . " su equipo favorito" . "\n";

