<?php
     include_once "backend.php";
?>

<h1>Seja bem-vindo/a <?php echo $nome; ?></h1>
<p>Confira nossos produtos:</p>
<ul>
     <?php foreach($produtos as $produto): ?>
          <li><?php echo $produto; ?></li>
     <?php endforeach; ?> 
</ul>
<!-- é usado o  endforeach pois precisa de um fim  -->