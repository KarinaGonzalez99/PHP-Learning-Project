<?php
//sort: ordena um array
//rsort: ordena um array em ordem reversa

$arr = [5, 2, 3, 1, 4];
print_r($arr);
sort($arr);
echo '<br>';

print_r($arr);
echo '<br>';

rsort($arr);
print_r($arr);
echo '<br>';

$arrNomes = ['João', 'Maria', 'Pedro', 'Ana'];
print_r($arrNomes);
sort($arrNomes);
echo '<br>';

print_r($arrNomes);
echo '<br>';

rsort($arrNomes);
print_r($arrNomes);
echo '<br>';

