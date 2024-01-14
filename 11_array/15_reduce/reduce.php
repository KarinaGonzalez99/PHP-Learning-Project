<?php
//reduce: reduz um array

$arr = [1,2,3,4,5];

function soma($valor1, $valor2){
     return $valor1 + $valor2;
}

echo array_reduce($arr, 'soma');