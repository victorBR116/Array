<?php 
//hashmap
$array = [

    "um",
    "dois",
    "tres",

];

foreach($array as $numeral => $nomeNumero){
    echo "$numeral em português é: " . $nomeNumero . PHP_EOL;
   
}
echo "Total:" . count($array) . PHP_EOL;

// atualizar o php var_dump(array_is_list($array));