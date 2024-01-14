<?php
//strpos() encontra a posição da primeira ocorrência de uma string dentro de outra string

$str = "Estamos testando o método strpos, com o strpos podemos encontrar strings ";
echo strpos($str,"strpos"); // outputs 27

echo "<br>";

$str2 = "Estamos testando o método strpos, com o strpos podemos encontrar strings ";
echo strpos($str2,"Java"); // outputs nothing

echo "<br>";

$str3 = "Estamos testando o método strpos, com o strpos podemos encontrar strings ";
echo strpos($str3,"Estamos"); // outputs 0