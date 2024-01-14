<?php
     $a = true;

     if(is_bool($a)){
          echo "$a é um booleano <br>";
     }

     if(is_bool(false)){
          echo "false é um booleano <br>";
     }

     if(is_bool('true')){
          echo '"true" é um booleano <br>';
     }

     if(is_bool(0)) { // nesse caso é falso porque 0 não é bool
          echo '0 é um booleano <br>';
     }

     if(is_bool(false == 0)) { // nesse caso é vdd porque false === 0 é bool
          echo 'false === 0 é um booleano <br>';
     }