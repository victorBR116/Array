<?php

$alunos2021 = [
  'Gustavo', 
  'João',
  'Maria',
  'Judas',
  'Matheus',
    ];

$novosAlunos = [
    'Ricardo',
    'Matue',
    'Sidorff',
    'Rafaela',

];

$alunos2022 = [...$alunos2021, 'Jubileu', ...$novosAlunos];
array_push($alunos2022, 'Carlos', 'Bambu', 'Fagner');
$alunos2022[] = 'Cassio';

array_unshift($alunos2022, 'Jorge', 'Henrico');

echo array_shift($alunos2022) . PHP_EOL;

echo array_pop($alunos2022) . PHP_EOL;

var_dump($alunos2022);