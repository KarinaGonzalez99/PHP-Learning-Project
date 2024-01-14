<?php
// mudança de tipo

     echo 5/2;
     echo "<br>";

     if(is_float(5/2)) {
          echo "é float";
     } else {
          echo "não é float";
     }
     echo "<br>";
     echo 2 . 3; // é string porque o ponto concatena
     echo "<br>";

     if(is_string(2 . 3)) {
          echo "é string";
     } else {
          echo "não é string";
     }

     echo "<br>";

     $nome = 'karina';
     $sobrenome - 'gonzalez';

     $nomeCompleto = $nome . " " . $sobrenome;
     echo $nomeCompleto;