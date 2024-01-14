<?php

$arr = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
$length = count($arr); // count = conta quantos elementos tem no array
$contador = 0;

while($contador < $length) {
    echo "Contador é $contador <br>";
    $contador++;
}

$array = [ 1, 'Karina', true, 'Alexandre', 3.14, false, 10, 'PHP', 0.1, 'Sunna' ];
$lengthArray = count($array);
$contador1 = 0;

while($contador1 < $lengthArray) {
     if(is_string($array[$contador1])) {
        echo $array[$contador1] . '<br>';
     }
    $contador1++;
}