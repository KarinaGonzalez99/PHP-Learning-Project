<?php

class Cachorro {
     public $nome;
     public $idade;
     public $raca;
     public $pedigree;
     public $cor;

     public function __construct($nome, $idade, $raca, $pedigree, $cor) {
          $this->nome = $nome;
          $this->idade = $idade;
          $this->raca = $raca;
          $this->pedigree = $pedigree;
          $this->cor = $cor;
     }
}

$Sunna = new Cachorro("Sunna", 3, "Labrador", "Não tenho", "Amarela");

echo "Oi, meu nome é $Sunna->nome, eu tenho $Sunna->idade anos e eu sou um $Sunna->raca, infelizmente $Sunna->pedigree pedigree, mas minha cor é $Sunna->cor, sou muito fofa e fedidinha <3. <br>";