<?php
// $conn = new mysqli('localhost', 'root', 'mypassword', 'primeiraAula'); // estava indo direto pra tabela e não pro banco em si

$host = 'localhost';
$user = '';
$pass = '';
$db = 'primeiraAula';

$conn = new mysqli($host, $user, $pass, $db);