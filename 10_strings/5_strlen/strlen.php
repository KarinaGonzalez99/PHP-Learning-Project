<?php

$str1 = "Esta é uma string muito grande";
$str2 = "Esta não";

echo strlen($str1) . "<br>";
echo strlen($str2) . "<br>";

?>

<?php
$str1 = "Esta é uma string muito grande, ela tem vários caracteres";

for($i = 0; $i < strlen($str1); $i++){
    echo $str1[$i] . "<br>";
}

?>