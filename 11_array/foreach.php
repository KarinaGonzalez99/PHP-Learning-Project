<?php
//foreach: percorre um array
// utilizando a notação de chave => valor, temos acesso rapido ao array associativo

$arr = [1,2,3,4,5];

foreach($arr as $i => $valor){
     echo "$i => $valor" . "<br>";
}

$arr2 = [
     'nome' => 'João',
     'idade' => 25,
     'profissao' => 'Programador'
];

foreach($arr2 as $caracteristica => $valor){
     echo "$caracteristica => $valor ". "<br>";
}