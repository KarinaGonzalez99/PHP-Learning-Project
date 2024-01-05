<?php

class AuAus{
     public $nome;
     public $idade;
     public $descricao;

     public function falar(){
          echo "Ola $this->descricao, meu nome é $this->nome, e eu tenho $this->idade anos<br>";
     }
}

class Professor extends AuAus{
     public $materia;
     public $escola;

     public function lecionar(){
          echo "Sou um professor/a e estou dando aula de $this->materia, na $this->escola <br>";
     }

}

$Sunna = new Professor();
$Sunna->nome = 'Sunna'; // lembrar que não tem $ na frente do nome, idade, descrição, materia e escola
$Sunna->idade = 3;
$Sunna->descricao = 'eu sou um labrador muito fofo';
$Sunna->materia = 'Autes';
$Sunna->escola = 'Escola de Auaus';
$Sunna->falar();
$Sunna->lecionar();