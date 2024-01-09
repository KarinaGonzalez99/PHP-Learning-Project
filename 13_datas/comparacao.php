<?php
// >, < ou ==

date_default_timezone_set('America/Sao_Paulo');

$dataA = new DateTime();
$dataB = new DateTime();
$dataC = new DateTime();

$dataB->setDate(1999, 02, 27);

$dataA->format("d/m/Y") . "<br>";
$dataB->format("d/m/Y") . "<br>";
$dataC->format("d/m/Y") . "<br>";

if ($dataA > $dataB) {
     echo "A dataA é maior que dataB <br>";
} else {
     echo "A dataA não é maior que dataB <br>";
}

if ($dataA < $dataB) {
     echo "A dataA é menor que dataB <br>";
} else {
     echo "A dataA não é menor que dataB <br>";
}

if ($dataA == $dataC) {
     echo "A dataA é igual a dataC <br>";
} else {
     echo "A dataA não é igual a dataC <br>";
}