<?php
//is_object: verifica se é um objeto
//get_class: retorna a classe
//method_exists: verifica se um metodo existe

class Humano {
     public function falar(){
          echo "Ola <br>";
     }
}

$karina = new Humano();

if(is_object($karina)) {
     echo "Objeto existe <br>";
} else {
     echo "Objeto não existe <br>";
}

echo get_class($karina) . "<br>";

if(method_exists($karina,"falar")) {
     echo "Metodo existe <br>";
} else {
     echo "Metodo não existe <br>";
}
 ?>