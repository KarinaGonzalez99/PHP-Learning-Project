<?php
// operador de módulo
// retorna o resto da divisão

echo 5 % 2; // 1
echo "<br>";

//função para saber se é par ou impar
 function parOuImpar($numero) {
      if($numero % 2 == 0) {
           echo "$numero é par";
      } else {
           echo "$numero é impar";
      }
 }

     parOuImpar(5);
     echo "<br>";
     parOuImpar(6);
     echo "<br>";
     parOuImpar(7);
     echo "<br>";
     parOuImpar(8);