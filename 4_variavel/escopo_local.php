<?php
// variavel local é a variavel que é declarada dentro de uma função
// não é acessivel fora da função
// o seu valor sempre é perdido quando a função termina

     $x = 10; // variavel global não é acessivel dentro de uma função
     echo "$x global <br>";

     function teste() {
          $x = 5; // variavel local é acessivel apenas dentro da função, pode ter o mesmo nome de uma variavel global
          echo "$x local <br>";
     }

     teste();