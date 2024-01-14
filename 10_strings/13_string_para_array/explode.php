<?php
//explode() divide uma string em strings

$str = "Hello world. It's a beautiful day.";
print_r (explode(" ",$str)); // outputs Array ( [0] => Hello [1] => world. [2] => It's [3] => a [4] => beautiful [5] => day. )

echo "<br>";

$str2 = "Carro, Moto, Bicicleta, Avião";
print_r (explode(",",$str2)); // outputs Array ( [0] => Carro [1] => Moto [2] => Bicicleta [3] => Avião )