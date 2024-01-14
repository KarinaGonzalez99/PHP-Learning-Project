<?php
// vamos criar um mock
//mock é um objeto que simula o comportamento de um objeto real

$usuario = [
     'nome' => 'Karina',
     'idade' => 24,
     'profissão' => 'Programadora'
];

if($usuario) {
     $nome = $usuario['nome'];
     $idade = $usuario['idade'];
     $profissao = $usuario['profissão'];
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
     <form action="processamento.php" method="GET">
          <div>
               <input type="text" name="nome" placeholder="Digite seu nome" value="<?php echo $nome; ?>">
          </div>
          <div>
               <input type="text" name="idade" placeholder="Digite sua idade" value="<?php echo $idade; ?>">
          </div>
          <div>
               <input type="text" name="profissao" placeholder="Digite sua profissão" value="<?php echo $profissao; ?>">
          </div>
          <div>
               <input type="submit" value="Enviar">
          </div>
     </form>
</body>
</html>