<?php

$host = 'localhost';
$user = '';
$pass = '';
$db = 'primeiraAula';

$conn = new PDO("mysql:host=$host;dbname=$db", $user, $pass); 

$id = 22;
$nome = 'Lanterna';
$descricao = 'Lanterna a pilha';

$stmt = $conn->prepare('UPDATE itens SET nome = :nome, descricao = :descricao WHERE id = :id'); // : significa que é um parametro

$stmt->bindParam(':id', $id);
$stmt->bindParam(':nome', $nome);
$stmt->bindParam(':descricao', $descricao);

$stmt->execute();
