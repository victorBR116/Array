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


usort($notas, function (array $nota1, array $nota2): int
{
    return $nota2['nota'] <=> $nota1['nota'];
});

var_dump($notas);
