<?php
// array_keys: retorna as chaves de um array
// array_values: retorna os valores de um array

$carro = [
     'marca' => 'Gol',
     'cor' => 'Vermelho',
     'ano' => 2010
];

print_r(array_keys($carro));
echo "<br>";
print_r(array_values($carro));