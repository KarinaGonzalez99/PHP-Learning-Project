<?php
//array_diff: compara dois arrays

$arr1 = [ 1, 2, 3 ];
$arr2 = [2,4,6];

print_r(array_diff($arr1, $arr2));
echo "<br>";
print_r(array_diff($arr2, $arr1));