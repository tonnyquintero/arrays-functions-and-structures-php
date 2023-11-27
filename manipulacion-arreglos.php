<?php

$edades = [18, 22, 40, 54];

// Count => Devuelve el conteo de elementos
echo count($edades) . "\n";

// array_push => Inserta un elemento en la última posición del array
array_push($edades, 13);

var_dump($edades);
echo count($edades) . "\n";

// is_array => Devuelve true si es un arreglo, false si no lo es
$esto_no_es_un_arreglo = "";
var_dump( is_array( $esto_no_es_un_arreglo ) );

// explode => Convierte en arreglo un string pide dos parámetros la separación, si es una coma un punto o un espacio vacio y la variable que tiene el string
$lista_de_frutas = "fresa cereza manzana uva";
$lista_de_frutas_array = explode(" ", $lista_de_frutas);

var_dump( $lista_de_frutas_array );

// implode => Hace exactamente lo contrario convierte en string los arreglos
$lista_de_equipo_array = ["Boca", "River", "barcelona", "inter"];
$lista_de_equipo = implode(",", $lista_de_equipo_array);

var_dump( $lista_de_equipo );