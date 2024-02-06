<?php

$host = 'localhost';
$user = '';
$pass = '';
$db = 'primeiraAula';

$conn = new PDO("mysql:host=$host;dbname=$db", $user, $pass); 

$id = 15;

$stmt = $conn->prepare('SELECT * FROM itens WHERE id > :id');

$stmt->bindParam(':id', $id);

$stmt->execute();

// $data = $stmt->fetch();

$data = $stmt->fetch(PDO::FETCH_ASSOC); // PDO::FETCH_ASSOC: retorna um array indexado pelo nome da coluna

print_r($data);

echo '<br>';

// $itens = $stmt->fetchAll();

$itens = $stmt->fetchAll(PDO::FETCH_ASSOC);

echo '<pre>';
print_r($itens);
echo '</pre>';