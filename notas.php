<?php

$notas = [
'Gustavo' => 10, 
'João' => 8,
'Maria'=> 9,
'Judas' => 7,
'Matheus'=> 6
];

krsort($notas);

var_dump($notas);