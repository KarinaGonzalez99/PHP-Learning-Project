<?php
//Ancestralidade : uma classe filha herda as propriedades e metodos de uma classe pai
// instanceof: verifica se um objeto pertence a uma classe

class Humano {

}

class Animal {

}

Class Professor extends Humano {

}

$Karina = new Humano();
$Sunna = new Animal();
$Alexandre = new Professor();

if($Karina instanceof Humano){
     echo "Karina é um Humano <br>";
} else {
     echo "Karina não é um Humano <br>";
}

if($Sunna instanceof Humano){
     echo "Sunna é um Humano <br>";
} else {
     echo "Sunna não é um Humano <br>";
}

if($Alexandre instanceof Humano){
     echo "Alexandre é um Humano <br>";
} else {
     echo "Alexandre não é um Humano <br>";
}

if($Alexandre instanceof Professor){
     echo "Alexandre é um Professor <br>";
} else {
     echo "Alexandre não é um Professor <br>";
}