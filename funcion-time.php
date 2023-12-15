<?php

$semana_siguiente = time() + (7 * 24 * 60 * 60);

echo 'Ahora:            '. date('Y-m-d') ."\n";
echo 'Semana Siguiente: '. date('Y-m-d', $semana_siguiente) ."\n";