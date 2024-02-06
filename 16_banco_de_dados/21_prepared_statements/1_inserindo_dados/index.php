<?php
// Prepared Statements: previne que parâmetros maliciosos sejam executados no banco de dados
// Método bind_param() vincula parâmetros a uma declaração SQL

$host = 'localhost';
$user = '';
$pass = '';
$db = 'primeiraAula';

$conn = new mysqli($host, $user, $pass, $db);

$nome = 'Mouse';
$descricao = 'Mouse sem fio';

$stmt = $conn->prepare('INSERT INTO itens (nome, descricao) VALUES (?, ?)'); //prepare() prepara a query para ser executada // ?? são os parâmetros que serão passados

$stmt->bind_param('ss', $nome, $descricao); // bind_param() vincula parâmetros a uma declaração SQL, s = string, i = inteiro, d = double

$stmt->execute(); // Executa a query

$conn->close();