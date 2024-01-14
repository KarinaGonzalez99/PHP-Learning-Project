<?php
// usa o count para saber quantos campos foram enviados
$validacoes = [];

if(count($_POST) > 0){

     if(!$_POST['name'] === ''){
          $validacoes[] = 'Por favor, preencha o nome do usuário!';
     }
     
     if($_POST['senha'] != $_POST['confirma']){
          $validacoes[] = 'As senhas precisam ser iguais!';
     }
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
     <?php 
     if(count($validacoes)):
     ?>
     <ul>
          <?php foreach($validacoes as $validacao): ?>
          <li><?= $validacao ?></li>
          <?php endforeach; ?>
     </ul>

     <?php
     endif;
     ?>

     <form action="index.php" method="POST">
          <div>
               <input type="text" name="nome" placeholder="Digite o seu nome">
          </div>
          <div>
               <input type="text" name="email" placeholder="Digite o seu email">
          </div>
          <div>
               <input type="password" name="senha" placeholder="Digite a sua senha">
          </div>
          <div>
               <input type="password" name="senha" placeholder="Confirme a sua senha">
          </div>
          <div>
               <input type="submit" value="Enviar">
          </div>
     </form>
</body>
</html>