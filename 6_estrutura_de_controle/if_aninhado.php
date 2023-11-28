<?php
// if aninhado

$idade = 18;
$nome = 'Matheus';
$maioridade = 18;

if($idade >= $maioridade){
     if($nome == 'Matheus'){
          echo "Maior de idade e o nome é Matheus <br>";
     } else {
          echo "Maior de idade e o nome não é Matheus <br>";
     }
} else {
     if($nome == 'Matheus'){
          echo "Menor de idade e o nome é Matheus <br>";
     } else {
          echo "Menor de idade e o nome não é Matheus <br>";
     }
}