<?php

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
     <h1>Nova página!</h1>
     <?php
     if($nome != ''):
     ?>
<p>Continua os cookies <?php echo $nome ?></p>
     <?php endif ?>
</body>
</html>