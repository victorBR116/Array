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
var_dump($alunos2022);