<?php
//compact: compacta um array

$marca = 'Gol';
$cor = 'Vermelho';
$ano = 2010;


$carro = compact("marca", "cor", "ano");
print_r($carro);