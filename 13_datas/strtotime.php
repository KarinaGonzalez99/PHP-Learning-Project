<?php
//strotime: converte uma string em um timestamp

date_default_timezone_set('America/Sao_Paulo');

$d = date("d/m/Y");
echo $d . "<br>";
$d2 = date("d/m/Y", strtotime("+1 day"));
echo $d2 . "<br>";