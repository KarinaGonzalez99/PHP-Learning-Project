<?php
// array_key_exists: verifica se uma chave existe em um array
// isset: verifica se uma chave existe em um array

$arr = [
     'nome' => 'João',
     'idade' => 25
];

echo array_key_exists('nome', $arr);
echo "<br>";
echo array_key_exists('nome2', $arr);
echo "<br>";
echo isset($arr['nome']);
echo "<br>";
echo isset($arr['nome2']);