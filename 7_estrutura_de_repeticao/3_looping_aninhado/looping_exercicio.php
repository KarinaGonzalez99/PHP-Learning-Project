<?php

$a = 0;

while($a <= 100){
     if($a == 30 || $a == 40){
          echo "Pulou o número $a <br>";
          $a+= 10;
          continue;
     }
     echo "Contador é $a <br>";
     $a+= 10;
}