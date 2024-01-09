<?php
//format: formata uma data
//modify: modifica uma data
//é usado no dateTime

$data = new DateTime();

echo $data->format("d/m/Y") . "<br>";
echo $data->format("D - M - Y") ."<br>";

$data->modify("+1 day");
echo $data->format("d/m/Y") ."<br>";
