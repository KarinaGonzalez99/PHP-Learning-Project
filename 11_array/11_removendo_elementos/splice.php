<?php
// array_splice - corta um array

$arr = [1,2,3,4,5,6,7,8,9];

$removidos = array_splice($arr, 2, 5);

print_r($removidos);
echo "<br>";
print_r($arr);