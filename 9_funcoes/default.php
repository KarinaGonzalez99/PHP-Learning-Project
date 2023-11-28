<?php

function teste ($a = 'teste'){
     echo "O valor de a é $a";
}

teste();
teste('outro teste');

// como fazer comentario no meio do codigo:
// o comentario é feito com // ou /* */
function testando($a /* = 'asd' ele nao daria certo*/, $b = 'teste'){ // inserir os defaults no final
     echo "O valor de a é $a e o valor de b é $b";
}

testando('teste2');