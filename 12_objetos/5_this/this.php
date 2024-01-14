<?php
//this: permite que seja acessado dentro da classe
// refere-se a instancia atual e não ao objeto

class Animal{
     public $nome;

     function escolherNome($nome){
          $this->nome = $nome;
     }
}

$sunna = new Animal();
echo "O nome do animal é $sunna->nome <br>";
$sunna->escolherNome('Sunna');
echo "O nome do animal é $sunna->nome <br>";