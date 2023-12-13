<?php
// propriedades: é uma propriedade de um objeto

class Carro {
     public $rodas = 4; // public permite que seja acessado fora da classe
     public $aro = 20;
     public $cor = 'branco';
}

$fusca = new Carro(); // new permite que seja criado um novo objeto, ou seja, dentro da classe carro tem um carro novo, com o nome fusca
echo $fusca->aro; // -> permite que seja acessado dentro da classe

echo '<br>';

$fusca->cor = 'azul'; // foi dado um novo valor para a propriedade
echo $fusca->cor;