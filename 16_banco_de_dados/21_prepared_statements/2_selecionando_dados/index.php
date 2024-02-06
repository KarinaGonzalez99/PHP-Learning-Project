<?php
$host = 'localhost';
$user = '';
$pass = '';
$db = 'primeiraAula';

$conn = new mysqli($host, $user, $pass, $db);

$id = 4;

$stmt = $conn->prepare('SELECT * FROM itens WHERE id >= ?');

$stmt->bind_param('i', $id);

$stmt->execute();

$result = $stmt->get_result();

$data = $result->fetch_all();

echo '<pre>';
print_r($data);
echo '</pre>';

$conn->close();