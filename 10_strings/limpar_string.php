<?php
// trim — Retira espaço no início e final de uma string
// ltrim — Retira espaço no início (à esquerda) de uma string
// rtrim — Retira espaço no final (à direita) de uma string

$str = "   Hello World!?   ";

echo "Essa é a string original: $str !!!!!!!!!!!!!!!!<br><br>";

$strComTrim = trim($str);

echo "Essa é a string com trim: $strComTrim!!!!!!!!!!!!!!!!<br><br>";

$strComLtrim = ltrim($str);

echo "Essa é a string com ltrim: $strComLtrim!!!!!!!!!!!!!!!!<br><br>";

$strComRtrim = rtrim($str);

echo "Essa é a string com rtrim: $strComRtrim!!!!!!!!!!!!!!!! <br><br>";