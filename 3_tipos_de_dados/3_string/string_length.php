<?php
//strlen = string length
function countVowels($a){
     $contador = 0;
     $vogais = ['a', 'e', 'i', 'o', 'u', 'A', 'E', 'I', 'O', 'U'];
     for($i = 0; $i < strlen($a); $i++){
         if(in_array($a[$i], $vogais)){
             $contador++;
         }
     }
     return $contador;
 }