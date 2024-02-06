<?php
// fetch_row() retorna um array com os dados da linha selecionada
// get_result() retorna um objeto com os dados selecionados

$host = 'localhost';
$user = '';
$pass = '';
$db = 'primeiraAula';

$conn = new mysqli($host, $user, $pass, $db);

$id = 2;

$stmt = $conn->prepare('SELECT * FROM itens WHERE id = ?');

$stmt->bind_param('i', $id);

$stmt->execute();

$result = $stmt->get_result();

$data = $result->fetch_row();

echo '<pre>';
print_r($data);
echo '</pre>';

$conn->close();

