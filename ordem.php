<?php

$notas =  [
    10,
    8,
    9,
    7


];

$notasOrdenadas = $notas;
sort($notasOrdenadas);

echo "Desordenadas: ";
var_dump($notas);

echo "Notas ordenadas:";
var_dump($notasOrdenadas);
