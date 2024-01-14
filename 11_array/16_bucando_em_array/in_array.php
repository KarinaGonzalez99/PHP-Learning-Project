<?php
//in_array: verifica se um valor existe em um array
// in_array('item', $array)

$arr = ["a", "b", "c"];

printf("%b",in_array("c", $arr));
echo "<br>";
// echo in_array($arr, "b");

$arr2 = ['banana', 'laranja', 'abacaxi', 'abacate', 'banana'];

printf("%b",in_array("bananas", $arr2));