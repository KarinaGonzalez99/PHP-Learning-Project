<?php
// public, protected, private
// public -> pode ser acessado de qualquer lugar
// protected -> pode ser acessado apenas pela classe de origem ou as que recebem a mesma herança
// private -> pode ser acessado apenas dentro da classe(apenas pela classe que foi criada)

class Car {
     public $rodas = 4;
     public $vidro = 'Sem pelicula'; // se colocar privado quebra o colocarPelicula, pois ele so pode ser acessado dentro da classe
     private $vidroPrivado = 'Sem pelicula';
     protected $portasProtected = 4;

     public function colocarPeliculaPrivada($pelicula) { // vai dar erro, pois o vidroPrivado so pode ser acessado dentro da classe
          $this->vidroPrivado = $pelicula;
     }

     public function getInfoVidros(){
          return $this->vidroPrivado;
     }

     public function getInfoPortas(){
          return $this->portasProtected;
     }
}
class Mecanico {
     public function alterarRodas($obj){
          $obj->rodas = 10;
     }
     public function colocarPelicula($carro, $pelicula){
          $carro->vidro = $pelicula;
     }
}

//PUBLIC:
$carro = new Car();
echo $carro->rodas . "<br>";
$karina = new Mecanico();
$karina->alterarRodas($carro);
echo $carro->rodas ."<br>";
$karina->colocarPelicula($carro, "g20");
echo $carro->vidro ."<br>";


// PRIVATE:
// $carro->colocarPeliculaPrivada('a22'); // vai dar erro, pois o vidroPrivado so pode ser acessado dentro da classe
// echo $carro->vidroPrivado ."<br>"; // o maximo que posso fazer é acessar o vidroPrivado
echo $carro->getInfoVidros() . "<br>"; // não altera o valor do vidroPrivado

// PROTECTED:
echo $carro->getInfoPortas() ."<br>"; // o