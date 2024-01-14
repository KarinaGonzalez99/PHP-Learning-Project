<?php
// implode — Junta elementos de uma matriz em uma string
// string implode ( string $glue , array $pieces )

$arr = ['Hello','World!','Beautiful','Day!'];
echo implode(" ",$arr); // outputs: Hello World! Beautiful Day!

echo "<br>";

$arr2= ['Carro','Moto','Bicicleta','Avião'];
echo implode(",",$arr2); // outputs: Carro,Moto,Bicicleta,Avião