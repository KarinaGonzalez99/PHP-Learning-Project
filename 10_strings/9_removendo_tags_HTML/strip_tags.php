<?php
// strip_tags() remove as tags HTML e PHP de uma string

$str = "<h1>Hello World!</h1>";
echo $str; // outputs <h1>Hello World!</h1>
echo strip_tags($str); // outputs Hello World!

$texto = "<p>Olá <b>mundo</b>!</p>";
echo $texto; // outputs <p>Olá <b>mundo</b>!</p>
echo strip_tags($texto); // outputs Olá mundo!