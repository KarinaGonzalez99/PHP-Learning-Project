<?php

function soma($a, $b){
     print_r(func_get_args()); // retorna um array com os argumentos
     echo '<br>';
     print_r(func_num_args()); // retorna o numero de argumentos
     return $a + $b;
}

soma(2, 4);

