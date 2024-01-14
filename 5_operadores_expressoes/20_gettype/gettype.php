<?php
// gettype() retorna o tipo da variavel

     $operacao = "5" * 12;
     echo gettype($operacao); // integer
     echo "<br>";

     echo gettype([]);
     echo "<br>";
     echo gettype(12.5);
     echo "<br>";
     echo gettype(true);
     echo "<br>";
     echo gettype("karina");
     echo "<br>";
     echo gettype(12);
     echo "<br>";
