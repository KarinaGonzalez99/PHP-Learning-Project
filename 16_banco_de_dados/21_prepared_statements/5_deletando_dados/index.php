<?php
// DELETE: deleta dados de uma tabela do banco de dados
// DELETE SEM WHERE: deleta todos os dados de uma tabela do banco de dados

$host = 'localhost';
$user = '';
$pass = '';
$db = 'primeiraAula';

$conn = new mysqli($host, $user, $pass, $db);
 
$id = 21;

$stmt = $conn->prepare('DELETE FROM itens WHERE id = ?');

$stmt->bind_param('i', $id); // bind_param() vincula parâmetros a uma declaração SQL, s = string, i = inteiro, d = double

$stmt->execute();

$conn->close();