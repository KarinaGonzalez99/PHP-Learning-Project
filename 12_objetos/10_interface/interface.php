<?php
// interface: é a ideia de que existe uma receita que deve ser implementada se houver a implementação do mecanismo

interface Caracteristicas{
     const nome = 'Karina';
     public function falar();
}

class Humano implements Caracteristicas{
     public $idade = 29;
     public function falar(){
          echo "Ola <br>";
     }

     public function dizerNome(){
          echo "Meu nome é " . self::nome . '<br>'; // SELF:: permite que seja acessado dentro da classe(lembrando que é usado por ter const e estar na interface)
     }
}

$sunna = new Humano();
$sunna->falar();
$sunna->dizerNome();