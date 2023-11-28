<?php
     //variavel estatica é uma variavel que não perde o valor quando a função termina
     // declarada com static

     function teste() {
          $x = 0; // variavel sempre reseta
          $x++;
          echo "$x <br>";
     }

     teste();
     teste();
     teste();

     echo "<br>";
     
     function testeStatic() {
          static $x = 0; // variavel estatica não reseta
          $x++;
          echo "$x <br>";
     }

     testeStatic();
     testeStatic();
     testeStatic();