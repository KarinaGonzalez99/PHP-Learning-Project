<?php

class Carro {
     public $rodas;
     public $aro;
     public $cor;
     public $velocidadeMax;

     function setVelocidadeMaxima($velocidade){
          $this->velocidadeMax = $velocidade;
     }

     function getVelocidadeMaxima(){
          echo "A velocidade maxima é $this->velocidadeMax km/h <br>";
     }
}

$fusca = new Carro();
$fusca->rodas = 4;
$fusca->aro = 20;
$fusca->cor = 'azul';
$fusca->setVelocidadeMaxima(200);
$fusca->getVelocidadeMaxima();
