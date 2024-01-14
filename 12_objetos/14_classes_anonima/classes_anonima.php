<?php
// quase não usado

$pessoa = new class() {
     public $nome = "Karina";
     public function dizerNome() {
          echo "Meu nome é $this->nome <br>";
     }
};

echo $pessoa->nome . "<br>";

$pessoa->dizerNome();