<?php
// DROP TABLE: deleta uma tabela do banco de dados
// CREATE TABLE: cria uma tabela no banco de dados

$host = 'localhost';
$user = '';
$pass = '';
$db = 'primeiraAula';

$conn = new mysqli($host, $user, $pass, $db);

// $teste = "CREATE TABLE teste (nome VARCHAR(100), sobrenome VARCHAR(100))";

$teste = "DROP TABLE teste"; // atualizar a pagina para ver o resultado (F5)

$conn->query($teste);

$conn->close();
