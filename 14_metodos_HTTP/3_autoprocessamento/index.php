<?php
// autoprocessamento: o php processa automaticamente os dados do formulário e os envia para o servidor
     $method = $_SERVER['REQUEST_METHOD'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Document</title>
</head>
<body>
     <?php
     // nesse caso é get pois o $method vai ser GET por ser a primeira requisição
          if($method === 'GET') :
          ?>
          <form action="index.php" method="POST">
          <div>
               <input type="text" name="nome" placeholder="Digite seu nome">
          </div>
          <div>
               <input type="submit" value="Enviar">
          </div>
     </form>
     <?php
     // o $_POST['nome'] está dizendo que deve-se pegar o nome digitado no input do formulário com o metodo POST
          else:
     ?>
     <h1> O seu nome é <?= $_POST['nome']; ?> </h1>


     <?php
     //endif é necessario para encerrar o if
          endif;
     ?>
</body>
</html>