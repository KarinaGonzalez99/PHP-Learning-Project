<?php
// ordem dos operadores

// 1º parenteses
// 2º multiplicação e divisão
// 3º adição e subtração
// 4º igualdade
// 5º and
// 6º or

// exemplos:
// multiplicação com prioridade
$x = 10 + 3 * 5; // 25
echo "$x <br>";
// parenteses com prioridade
$y = (10 + 3) * 5; // 65
echo "$y <br>";
// divisão com prioridade
$z = 10 + 3 * 5 / 2; // 17.5
echo "$z <br>";
// and com prioridade
$w = 10 + 3 * 5 / 2 > 5 && 10 + 5 < 3; // false
echo "$w <br>";
// or com prioridade
$v = 10 + 3 * 5 / 2 > 5 || 10 + 5 < 3; // true
echo "$v <br>";