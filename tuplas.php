<?php 

$dados = [
    'nome' => 'José',
    'nota' =>  8, 
    'idade' => 21,
];
//[$nome, $nota, $idade] = $dados;

extract($dados);

var_dump($nome, $nota, $idade);

var_dump(compact('nome', 'nota', 'idade'));