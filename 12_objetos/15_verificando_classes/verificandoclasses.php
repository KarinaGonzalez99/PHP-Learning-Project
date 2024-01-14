<?php
// class_exists: verifica se uma classe existe
// get_class_methods: retorna os metodos da classe
// get_class_vars: retorna as variaveis da classe

class Humano {

}

if(class_exists("Humano")) {
     echo "Classe existe <br>";
} else {
     echo "Classe não existe <br>";
}
 ?>

 <?php

 class Cachorro {
     public $nome;
     public $idade;
     public $descricao;

     public function latir(){
          echo "AU AU <br>";
     }

     public function falar(){
          echo "Ola <br>";
     }
 }

 print_r(get_class_vars("Cachorro"));
 echo "<br>";
 print_r(get_class_methods("Cachorro"));