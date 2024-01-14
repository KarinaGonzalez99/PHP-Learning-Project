<?php

$str = "O rato roeu a roupa do rei de roma";
$contador = 0;

for($i = 0; $i < strlen($str); $i++){
     if(in_array($str[$i], ['a'])){
          $contador++;
     }     
}

print("A letra 'a' aparece $contador vezes na frase '$str' <br>");
?>

<?php
for($i = 0; $i < strlen($str); $i++){
     if($frase[$i] == 'a'){
          $contador++;
     }     
}

print("A letra 'a' aparece $contador vezes na frase '$str'");
