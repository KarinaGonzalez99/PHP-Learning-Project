<?php
//classes abstratas: nao pode ser instanciadas, palavra reservada abstract
//métodos estaticos são chamados diretamente na classe
//métodos abstratos precisam ser chamados em uma instancia da classe
//se você deseja chamar um método não estatico em estático em uma nova classe, declare-o como static na nova classe

abstract class Teste {
     public static function testandoClasse() {
          echo "Testando classe abstrata <br>";
     }

     abstract public function testeAbs();
}

// $y = new Teste(); // não funciona pois não da pra instanciar(chamar/criar objeto), classes abstratas
// como chamar:
Teste::testandoClasse(); // só funcionou pois não estava como o static na função, antes funcionava e só reclamava, agora não roda

class Nova extends Teste {
     public function testeAbs() {
          echo "Testando classe Nova <br>";
     }
}

$n = new Nova();
$n->testeAbs();