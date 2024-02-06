<?php
// INSERT: insere dados em uma tabela do banco de dados
// SELECT: seleciona dados de uma tabela do banco de dados
// Método bind_param() vincula parâmetros a uma declaração SQL

$host = 'localhost';
$user = '';
$pass = '';
$db = 'primeiraAula';

$conn = new mysqli($host, $user, $pass, $db);
 
$id = 21;

$stmt = $conn->prepare('UPDATE itens SET nome = ?, descricao = ? WHERE id = ?');

$nome = 'Teclado';
$descricao = 'Teclado sem fio';

$stmt->bind_param('ssi', $nome, $descricao, $id);

$stmt->execute();

if($stmt->error){
     echo 'Erro: ' . $stmt->error;
}

$conn->close();