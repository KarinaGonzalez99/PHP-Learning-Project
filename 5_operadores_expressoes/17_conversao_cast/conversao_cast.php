<?php
// cast/conversao de tipos
$a = (int) "12";

echo $a ."<br>";
echo $a + 10 ."<br>";

if($a === 12) {
    echo "é igual a 12 <br>";
} else {
    echo "não é igual a 12 <br>";
}

$b = (float) "12.5";

if($b === 12.5) {
    echo "é igual a 12.5 <br>";
} else {
    echo "não é igual a 12.5 <br>";
}