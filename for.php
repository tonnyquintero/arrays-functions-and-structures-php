<?php

for ($i=0; $i < 10; $i++) { 
    echo $i . "\n";
};

for ($i=10; $i > 0; $i--) { 
    echo $i . "\n";
};

echo "\n";

// se ejecuta hasta q termine la condicion de i ya que j no tiene condicion
for ($i=0, $j=0; $i < 10; $i++, $j += 2) { 
    echo "i = $i j = $j" . "\n";
}

echo "\n";


// se puede recorrer un array de esta manera
$michis = array (
    "MichiJuan",
    "MichiBerto",
    "Mr.Michi",
    "MichiMouse",
    "PepeMichi",
    "MichiMan",
    "MichiMe",
);
for ($i=0; $i <= count($michis) - 1 ; $i++) {     
    echo $i . " - " . $michis[$i] . "\n";
}

echo "\n";
