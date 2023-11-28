<?php
$objeto = [
     'Carro' => 2000,
     'Moto' => 1000,
     'Bicicleta' => 500,
];

function obj($objeto){
     $objetosCaros = [];
     foreach ($objeto as $tipo => $valor){
          if ($valor >= 1000){
               array_push($objetosCaros, $valor);
          }
     }
     return $objetosCaros;
}


print_r(obj($objeto));