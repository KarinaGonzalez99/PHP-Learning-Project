<?php
// break

$contador = 1;

while($contador <= 10) {
    echo "Contador é $contador <br>";
    if($contador === 5) {
        break;
    }
    $contador++;
}