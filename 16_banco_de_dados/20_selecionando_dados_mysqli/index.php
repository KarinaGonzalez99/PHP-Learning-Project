<?php
// SELECT: seleciona dados de uma tabela do banco de dados
// Método fetch_assoc() retorna um array associativo com os dados da linha selecionada
// Método fetch_all() retorna um array com todos os dados selecionados

$host = 'localhost';
$user = '';
$pass = '';
$db = 'primeiraAula';

$conn = new mysqli($host, $user, $pass, $db);

$sql = 'SELECT * FROM itens';
$result = $conn->query($sql); // Executa a query

$conn->close();

//Resultado de um unico elemento
$item = $result->fetch_assoc(); // Retorna a tabela primeira linha como array associativo

print_r($item);
echo '<br>';
//Resultado de todos os elementos
$itensAll = $result->fetch_all(); // Retorna a tabela como array

echo '<pre>'; // Melhora a visualização do array
print_r($itensAll);
echo '</pre>';

$conn->close();