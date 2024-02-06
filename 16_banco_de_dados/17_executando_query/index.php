<?php
// Query: é uma pergunta que fazemos ao banco de dados para obter informações

$host = 'localhost';
$user = '';
$pass = '';
$db = 'primeiraAula';

$conn = new mysqli($host, $user, $pass, $db);

$sql = 'SELECT * FROM itens';
$result = $conn->query($sql); // Executa a query

print_r($result);

$conn->close(); // Fecha a conexão para liberar recursos e evitar problemas