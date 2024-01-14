<?php
//asort: ordena um array em ordem de valores
//ksort: ordena um array em ordem alfabética de chave

$arr = [
     'Karina' => 24,
     'João' => 25,
     'Maria' => 16
];

print_r($arr);
echo "<br>";

asort($arr);
print_r($arr);
echo "<br>";

ksort($arr);
print_r($arr);