<?php
// o upload é feito com o isset para saber se o arquivo foi enviado
// isset: verifica se a variável existe
// $_FILES: verifica se o arquivo foi enviado pelo metodo POST
//usa-se o enctype="multipart/form-data" para o envio do arquivo

if(isset($_FILES)){
     print_r($_FILES);
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
     <form action="index.php" method="POST" enctype="multipart/form-data">
          <div>
               <input type="file" name='imagem'>
          </div>
          <div>
               <input type="submit" value="Enviar">
          </div>
     </form>
</body>
</html>