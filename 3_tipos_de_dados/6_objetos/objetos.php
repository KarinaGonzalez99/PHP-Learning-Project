<?php
     class Pessoa{
          function falar(){
               echo 'Olá';
          }
     }

     $Karina = new Pessoa();
     $Karina->nome = 'Karina'; // add propriedade nome ao objeto Karina
     echo $Karina->nome . '<br>';
     $Karina->falar(); // chama o método falar do objeto Karina