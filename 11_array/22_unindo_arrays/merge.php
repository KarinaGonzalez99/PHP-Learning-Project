<?php
// array_merge: une dois arrays

$arr1 = [
     'Karina' => 24,
     'João' => 25,
     'Maria' => 16
];

$arr2 = [
     'Pedro' => 18,
     'Joaquim' => 22,
     'Maria' => 16
];

$arr3 = array_merge($arr1, $arr2);
print_r($arr3);