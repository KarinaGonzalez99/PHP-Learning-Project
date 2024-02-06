<?php

$host = 'localhost';
$user = '';
$pass = '';
$db = 'primeiraAula';

$conn = new PDO("mysql:host=$host;dbname=$db", $user, $pass); 

$stmt = $conn->prepare('INSERT INTO itens (nome, descricao) VALUES (:nome, :descricao)');

$nome = 'Teclado'; // padrao usar parametros de referencia
$descricao = 'Teclado sem fio';

$stmt->bindParam(':nome', $nome);
$stmt->bindParam(':descricao', $descricao);

$stmt->execute();


