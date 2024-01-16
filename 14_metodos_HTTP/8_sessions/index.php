<?php
//com sessions: os dados do usuário são armazenados no servidor
//usar sessions para armazenar dados de usuário
//utiliza recursos de cookie
//usa-se para autentificação, carrinho de compras, etc.
//mais usado que cookies
//o caminho fica em php.ini: session.save_path

session_start();

// print_r($_SESSION);

$_SESSION['nome'] = 'Karina';
?>

<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Document</title>
</head>
<body>
     <h1>Olá session! </h1>
</body>
</html>