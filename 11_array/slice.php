<?php
//array_slice - corta um array

$arr = [1,2,3,4,5,6,7,8,9];

$slice1 = array_slice($arr, 2, 5); // (array, indice inicial, quantidade)

print_r($slice1);
echo "<br>";
print_r($arr);