<?php
// INSERT INTO: insere dados em uma tabela do banco de dados

$host = 'localhost';
$user = '';
$pass = '';
$db = 'primeiraAula';

$conn = new mysqli($host, $user, $pass, $db);

$table = 'itens';
$nome = 'Teclado';
$descricao = 'Teclado sem fio';

$q = "INSERT INTO $table (nome, descricao) VALUES ('$nome', '$descricao')";

$conn->query($q);

$conn->close();