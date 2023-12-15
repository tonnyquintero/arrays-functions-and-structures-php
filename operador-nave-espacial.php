<?php

$precios_de_cafe = [12, 48, 5, 4, 45, 2, 1];

 usort($precios_de_cafe, function($a , $b){
    return $a <=> $b;
 });

 var_dump( $precios_de_cafe );