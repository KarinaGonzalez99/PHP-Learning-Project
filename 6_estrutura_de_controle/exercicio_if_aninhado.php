<?php
$numero = 10;
$numero2 = 20;
$numero3 = 30;

if(is_int($numero) && is_int($numero2) && is_int($numero3)){
     $numero = $numero * 2;
     $numero2 = $numero2 * 2;
     $numero3 = $numero3 * 2;
     echo "Os números são do tipo números <br>";
     if($numero > 100 || $numero2 > 100 || $numero3 > 100){
          echo "Os números são maiores que 100 <br>";
     } else {
          echo "Os números não são maiores que 100 <br>";
     }
} else {
     echo "Os números não são inteiros <br>";
}