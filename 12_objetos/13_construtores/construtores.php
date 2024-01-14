<?php
// construtores: podemos inicializar objetos com valores pré definidos

class Car {
     public $portas;
     public $cor;
     public $marca;

     public function __construct($portas, $cor, $marca) { // foi definido como construtor: $portas, $cor, $marca
          $this->portas = $portas;
          $this->cor = $cor;
          $this->marca = $marca;
     }
}

$ferrari = new Car(4, 'Vermelho', 'Ferrari');

echo "O carro é da marca $ferrari->marca e tem a cor $ferrari->cor com $ferrari->portas portas <br>";