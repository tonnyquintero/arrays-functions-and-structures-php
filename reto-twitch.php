<?php

$amount = readline("Ingresa el monto que tienes:  ");

if (
    $amount >= 100
) {
    echo "Tienes $amount dolares en la cuenta, ya los puedes retirar";
} else {
    echo "Tienes $amount dolares en la cuenta, aún no puedes retirar. El mínimo es 100 dolares";
}

echo "\n";

