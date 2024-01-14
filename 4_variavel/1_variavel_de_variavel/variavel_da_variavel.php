<?php

     $x = "nome"; // variavel dado o valor de nome
     echo $x;
     $$x = "Maria"; // variavel que pega o valor da variavel $x e atribui o valor de Maria
     echo "<br>";
     echo $nome; // foi chamado o valor da variavel $x que é nome e atribuiu o valor de Maria

$nome = "variavelA";
$variavelA = "Olá, sou a variável A!"; // ou seja a varaivelA é o $$nome

// Usando variável de variável
echo $$nome; // Saída: Olá, sou a variável A!