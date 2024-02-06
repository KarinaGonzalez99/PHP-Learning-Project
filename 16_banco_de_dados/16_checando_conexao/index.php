<?php

$host = 'localhost';
$user = '';
$pass = '';
$db = 'primeiraAulcd a';

$conn = new mysqli($host, $user, $pass, $db);

if($conn->connect_error) {
    echo 'Erro na conexão! <br>';
    echo 'Erro: ' . $conn->connect_error;
}