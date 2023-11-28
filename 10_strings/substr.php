<?php
// substr() returna uma parte de uma string
// substr(string, start, length)
// start: obrigatório, especifica a posição inicial da substring
// length: opcional, especifica o tamanho da substring
// se start for negativo, a contagem começa a partir do final da string
// se length for negativo, a contagem começa a partir do final da string
// se length for omitido, a substring vai até o final da string
// se length for maior que o tamanho da string, a substring vai até o final da string
// se start + length for maior que o tamanho da string, a substring vai até o final da string
// se start for maior que o tamanho da string, a substring será vazia
// se start for negativo e maior que o tamanho da string, a substring começa no início da string
// se start + length for negativo, a substring começa no início da string
// se start + length for negativo e maior que o tamanho da string, a substring começa no início da string

// exemplo 1
$str = "Meu nome é Karina Gonzalez";
echo substr($str, 0); // outputs Hello World!
echo "<br>";
echo substr($str, 6); // outputs World!
echo "<br>";
echo substr($str, 0, 5); // outputs Hello
echo "<br>";
echo substr($str, 6, 6); // outputs World
echo "<br>";
echo substr($str, 0, 0); // outputs nothing
echo "<br>";
echo substr($str, 0, 100); // outputs Hello World!
echo "<br>";
echo substr($str, 6, 100); // outputs World!
echo "<br>";
echo substr($str, 0, -1); // outputs Hello World
echo "<br>";
echo substr($str, 0, -6); // outputs Hello
echo "<br>";
echo substr($str, 6, -1); // outputs World
echo "<br>";
echo substr($str, 6, -6); // outputs nothing
echo "<br>";
echo substr($str, -6); // outputs World!
echo "<br>";
echo substr($str, -6, 2); // outputs Wo
echo "<br>";
echo substr($str, -6, -1); // outputs Worl
echo "<br>";
echo substr($str, -6, -6); // outputs nothing
echo "<br>";
echo substr($str, -100, 100); // outputs Hello World!
echo "<br>";
echo substr($str, -100, -100); // outputs nothing
