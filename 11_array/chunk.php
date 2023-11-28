<?php
// array_chunk - divide um array em pedaços

$arr = range(1, 20);

print_r(array_chunk($arr, 4));
echo "<br>";
echo "<br>";
print_r(array_chunk($arr, 10));