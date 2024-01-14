<?php
//parse_url() pega a url e retorna um array de dados
//NÃO FUNCIONOU
$url = "https://www.google.com";

// echo parse_url($url);
print_r(parse_url($url));
echo "<br>";
?>

<?php
//parse_url() pega a url e retorna um array de dados

$url = "https://www.google.com";

$arrayUrl = parse_url($url);

print_r($arrayUrl);

echo "<br>";

$url2 = "https://www.google.com.br/?parametro1=valor1&parametro2=valor2";

$arrayUrl2 = parse_url($url2);

print_r($arrayUrl2);

echo "<br>";

?>