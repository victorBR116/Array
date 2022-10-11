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
'Maria'=> 9,
'Judas' => 7,
'Matheus'=> 10,
];

var_dump(array_diff_key($notasBimestre1, $notasBimestre2));