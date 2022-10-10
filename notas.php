<?php

$notas = [
'Gustavo' => 10, 
'João' => 8,
'Maria'=> 9,
'Judas' => 7,
'Matheus'=> 6,
];

krsort($notas);
var_dump($notas);

if (is_array($notas)){
    echo 'Sim, isso é um array' . PHP_EOL;
};

//var_dump(array_is_list($notas));

echo "João fez a prova:" . PHP_EOL;
var_dump(isset($notas['João']));

echo "Alguém tirou 10?" . PHP_EOL;
var_dump(in_array(10, $notas, true));

echo "Quem tirou 10?" . PHP_EOL;
var_dump(array_search(10, $notas, true));

//array key_key_exist = verifica se a chave existe
//in_array = verifica se o valor existe 
//isset = verifica se a chave existe e não é nula