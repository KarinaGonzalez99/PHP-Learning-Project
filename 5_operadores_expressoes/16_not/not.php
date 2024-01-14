<?php
//not = inverter o resultado booleano

if(!2 == 2) {
    echo "verdadeiro <br>";
} else {
    echo "falso <br>";
}

if(!true == false) {
     echo "verdadeiro2 <br>";
     } else {
     echo "falso2 <br>";
}

if(!(5 > 3)) { // true que vira false
    echo "verdadeiro3 <br>";
} else {
    echo "falso3 <br>";
}

if(!(5 < 3)) { // false que vira true
    echo "verdadeiro4 <br>";
} else {
    echo "falso4 <br>";
}