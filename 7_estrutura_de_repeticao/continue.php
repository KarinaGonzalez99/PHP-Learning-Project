<?php
// continue

$contador = 1;

while ($contador <= 10) {
     if ($contador === 5 || $contador === 7) {
          echo "Pulou o número $contador <br>";
          $contador++;
          continue;
     }
     echo "Contador é $contador <br>";
     $contador++;
}