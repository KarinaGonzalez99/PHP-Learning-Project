<?php
// O helper URL é um helper que ajuda na construção de URLs.
// usa-se o dirname para pegar o caminho absoluto da URL.
//$SERVER['SERVER_NAME']: me da o localhost ou o IP do servidor.
//$_SERVER['REQUEST_URI']: me da o caminho absoluto da URL.
// ?: me da o caminho absoluto da URL com o parâmetro.
// /: me da o caminho absoluto da URL sem o parâmetro.

$BASE_URL = "http://" . $_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'];
// mudei a base_url para o caminho absoluto da URL com a porta que eu queria, pois se não abria no local certo e nao carregava o arquivo css

