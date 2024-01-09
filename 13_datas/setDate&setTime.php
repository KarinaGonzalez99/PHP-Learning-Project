<?php
//setDate: modifica a data
//setTime: modifica a hora

$data = new DateTime();

print_r($data);
echo "<br>";

$data->setDate(1999, 02, 27);

print_r($data);
echo "<br>";

$data->setTime(11, 14, 23);
print_r($data);