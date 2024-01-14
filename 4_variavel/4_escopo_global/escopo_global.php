<?php
     // variavel global não é acessivel dentro de uma função, a não ser que seja declarada como global
     // declarada fora da função

     $teste = 'asd';
     echo '$teste fora da função <br>';

     function testeGlobal() {
          global $teste; // declarando a variavel global dentro da função
          $teste = '123';
          echo "$teste dentro da função <br>";
     }

     testeGlobal();