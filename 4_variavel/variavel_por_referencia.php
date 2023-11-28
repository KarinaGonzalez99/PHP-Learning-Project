<?php
// referenciam o mesmo ponto pra memoria, se muda um muda outro
     $x = 10;
     $y = &$x; // o & faz a referencia de memoria

     echo $x; 
     echo "<br>";
     echo $y;
     echo "<br>";

     $y = 20;

     echo 'Depois da alteração: <br>';
     echo $x;
     echo "<br>";
     echo $y;
     echo "<br>";

     $x = 30;

     echo 'Depois da alteração2: <br>';
     echo $x; 
     echo "<br>";
     echo $y;
     echo "<br>";