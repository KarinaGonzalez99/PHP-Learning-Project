<?php

$array = [ 1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20];

for($i = 0; $i < count($array); $i++) {
     if($array[$i] % 2 == 0) {
         echo "O número $array[$i] é par <br>";
     // } else {
     //     echo "O número $array[$i] é impar <br>";
     }
}
?>

<?php

$array = [];

for($i = 1; $i <= 10; $i++){
     array_push($array, $i); // coloca o array e o valor que quero adicionar
}

print_r($array);

?>

<?php
$arr = [ ];
for($i = 10; $i <= 20; $i++){
     array_push($arr, $i);
}

print_r($array);

for($i = 0; $i < count($arr); $i++){
     if($arr[$i] % 2 == 0){
         echo "O número $arr[$i] é par <br>";
     } else {
         echo "O número $arr[$i] é impar <br>";
     }
}