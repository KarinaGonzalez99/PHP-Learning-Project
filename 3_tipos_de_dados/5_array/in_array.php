<?php
// in_array = esta no array
//primeiro parametro é o que queremos procurar
//segundo parametro é o array onde queremos procurar
//retorna true ou false
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