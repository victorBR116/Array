<?php

$notas =  [
    [
        'aluno' => 'João',
        'nota' => 10,
    ],

    [
        'aluno' => 'Carlos',
        'nota' => 5,
    ],

    [
        'aluno' => 'joana',
        'nota' => 8,
    ],
];

function ordenaNota(array $nota1, array $nota2): int
{
    return $nota2['nota'] <=> $nota1['nota'];
}

usort($notas, 'ordenaNota');

var_dump($notas);
