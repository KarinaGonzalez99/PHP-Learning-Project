<?php
// const: constante, usado para definir valores fixos

class Humano {
     public const OLHOS = 2;
     public const BRACOS = 2;
     public const PERNAS = 2;

     function mostrarConstantes(){
          echo self::OLHOS . '<br>'; // SELF:: permite que seja acessado dentro da classe
     }
}

$karina = new Humano();

echo $karina::BRACOS . '<br>'; // :: permite que seja acessado dentro da classe, é como se chama a constante

$karina->mostrarConstantes();