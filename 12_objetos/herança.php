<?php
// herança: uma classe filha herda as propriedades e metodos de uma classe pai

class Humano {

     public $idade = 24;

     public function falar(){
          echo "Ola <br>";
     }

     private function gritar(){
          echo "AAHHHHHHHH! <br>";
     }

     public function acessarGritar(){
          $this->gritar();
     }

     protected function susurrar(){
          echo "eii psiu!!! <br>";
     }

     public function acessarSusurrar(){
          $this->susurrar();
     }
}

class Programador extends Humano {
     public function acessarSusurrarProgramador(){
          echo "método dois <br>";
          $this->susurrar();
     }
}

$Sunna = new Humano();
$Sunna->falar();
$Sunna->acessarGritar();
$Sunna->acessarSusurrar();

$Karina = new Programador();
echo $Karina->idade . "<br>";
$Karina->falar();
$Karina->acessarGritar();
$Karina->acessarSusurrar();
$Karina->acessarSusurrarProgramador();