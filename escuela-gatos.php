<?php

$escuela = array (
    array(
        "nombre" => "Mr. Satan",
        "Ocupacion" => "Fontanero",
        "Cabellos" => "no tiene",
        "comidas" => array(
            "Favorita" => "Pizza",
            "NoFavorita" => "pescado",
        )
    ),
    array(
        "nombre" => "Morfeo",
        "Ocupacion" => "Arquitecto",
        "Cabellos" => "no tiene",
        "comidas" => array(
            "Favorita" => "Helado",
            "NoFavorita" => "Pasas",
        )
    ),
    array(
        "nombre" => "Alexander",
        "Ocupacion" => "Cartero",
        "Cabellos" => "Rubio",
        "comidas" => array(
            "Favorita" => "Mortadela",
            "NoFavorita" => "Arepa",
        )
    ),
);

$morfeo = $escuela[1];
$alex = $escuela[2];

echo "La comida menos favorita de Morfeo es {$morfeo["comidas"]["NoFavorita"]}" . "\n";
echo "El color de cabello de Alexander es " . $alex["Cabellos"] . "\n";