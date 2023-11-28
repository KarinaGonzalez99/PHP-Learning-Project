<?php
     $nome = 'Karina';
     $idade = 25;

     if(is_string($nome)){
          echo "$nome é uma string <br>";
     }

     if(is_string($idade)){
          echo "$idade é uma string <br>";
     }

     if(is_string('asd')) {
          echo '"asd" é uma string <br>';
     }