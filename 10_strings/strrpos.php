<?php
// strrpos() encontra a posição da último ocorrencia de uma string dentro de outra string

$str = "Testando encontrar o último ocorrencia de uma string dentro de outra string";

echo strrpos($str,"Testando"); // outputs 0
echo "<br>";
echo strrpos($str, "string"); // outputs 70
echo "<br>";
echo strlen($str); // outputs 76