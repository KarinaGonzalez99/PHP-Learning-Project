<?php

$i = 0;

while($i < 10) {
    echo "Looping externo é $i <br>";
    $j = 0;
     while($j < 5) {
          echo "Looping interno é $j <br>";
          $j++;
     }
    $i++;
}