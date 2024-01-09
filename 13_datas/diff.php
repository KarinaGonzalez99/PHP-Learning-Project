<?php
//diff: compara duas datas

date_default_timezone_set('America/Sao_Paulo');

$dataA = new DateTime();
$dataB = new DateTime();

$dataB->setDate(1999, 02, 27);

echo $dataA->format("d/m/Y") . "<br>";
echo $dataB->format("d/m/Y") . "<br>";

$diferenca = $dataA->diff($dataB);
print_r($diferenca);
echo "<br>";