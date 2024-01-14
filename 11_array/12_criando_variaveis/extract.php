<?php
//extract: extrai dados de um array

$arr = [
     'nome' => 'João',
     'idade' => 25
];

extract($arr);

echo $nome . "<br>";
echo $idade . "<br>";