<?php
//cookies: strings que contem informações, são armazenadas no navegador do usuário
//usar cookies para armazenar dados de usuário
//função setcookie(): adiciona um cookie
//acessar cookies: $_COOKIE
//setcookie(): (nome, valor, tempo de expiração)
//isset(): verifica se o cookie existe

setcookie('nome', 'Karina', time() + 3600);

if(isset($_COOKIE['nome'])){
     $nome = $_COOKIE['nome'];
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Document</title>
</head>
<body>
     <h1>Olá mundo!</h1>
     <?php
     if($nome != ''):
     ?>
<p>Olá <?php echo $nome ?></p>
     <?php endif ?>
</body>
</html>