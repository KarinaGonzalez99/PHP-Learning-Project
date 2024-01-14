<?php

$pessoas = [
     'Karina' => 24,
     'João' => 25,
     'Maria' => 26
];

?>

<table>
     <tr>
          <th><b>Nome</b></th>
          <th><b>Idade</b></th>
     </tr>
     <?php foreach($pessoas as $nome => $idade): ?>
     <tr>
          <td><?= $nome ?></td>
          <td><?= $idade ?></td>
     </tr>
     <?php endforeach ?>
</table>
