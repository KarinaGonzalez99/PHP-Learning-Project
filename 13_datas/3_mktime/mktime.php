<?php
//mktime: recebe seus paramentros hora minuto seungos, mes dia e ano
// assim podemos criar uma data com o mktime
              //     h, m,  s, m,   d,    y
$d = mktime(11, 14, 23, 02, 27, 1999);
echo $d . "<br>";
$dataformatada = date("d/m/Y", $d);
echo $dataformatada;