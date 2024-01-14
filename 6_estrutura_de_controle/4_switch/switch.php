<?php
//switch usado na substituição de if
// podemos add um break para parar a execução do switch
// podemos add um default para caso nenhuma das opções seja verdadeira

$x = "oi";

switch($x) {
     case "0":
          echo "O valor de x é 0 <br>";
          break;
     case 1:
          echo "O valor de x é 1 <br>";
          break;
     case "oi":
          echo "O valor de x é 2 <br>";
          break;
     default:
          echo "O valor de x não é nenhum dos mencionados acima <br>";
          break;
}

if($x == 0){
     echo "O valor de x é 0 <br>";
} else if($x == 1){
     echo "O valor de x é 1 <br>";
} else if($x == 2){
     echo "O valor de x é 2 <br>";
} else {
     echo "O valor de x não é nenhum dos mencionados acima <br>";
}