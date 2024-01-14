<?php
date_default_timezone_set('Asia/Tokyo');

// Criando uma instância da data com o fuso horário padrão
$data = new DateTime();
echo $data->format('d/m/Y H:i:s') . "<br>";

// Convertendo para o fuso horário de São Paulo
$data->setTimezone(new DateTimeZone('America/Sao_Paulo'));
echo $data->format('d/m/Y H:i:s') . "<br>";
?>
