<?php

class Pessoa {
     public $nome;
     public $idade;

     function andar($m){
          echo "O/a $this->nome andou $m metros <br>"; // usado o this para acessar os atributos, sem isso não funciona
     }
}

$karina = new Pessoa();

$karina->nome = 'Karina';
$karina->idade = 24;

echo "O nome dele/a é $karina->nome, e tem $karina->idade anos <br>";
$karina->andar(50);