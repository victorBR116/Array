<?php

$notasBimestre1 = [
'Gustavo' => 10, 
'João' => 8,
'Maria'=> 9,
'Judas' => 7,
'Matheus'=> 6,
];

$notasBimestre2 = [ 
'João' => 8,
'Judas' => 7,
'Matheus'=> 10,
];

$alunosFaltantes = array_diff_key($notasBimestre1, $notasBimestre2);
$nomeAluno = array_keys($alunosFaltantes);
$notasAlunos = array_values($alunosFaltantes);

var_dump(array_combine($notasAlunos, $nomeAluno));
var_dump(array_flip($alunosFaltantes));