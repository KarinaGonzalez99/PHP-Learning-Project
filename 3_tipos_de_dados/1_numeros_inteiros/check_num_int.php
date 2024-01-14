<?php
     if(is_int(5)){
          echo '5 É um número inteiro <br>';
     }
     if(is_int(5.5)){
          echo '5.5 É um número inteiro <br>';
     }
     if(is_int('5')){
          echo '"5" É um número inteiro <br>';
     }

     $n = 5;
     if(is_int($n)){
          echo '$n É um número inteiro <br>';
     }