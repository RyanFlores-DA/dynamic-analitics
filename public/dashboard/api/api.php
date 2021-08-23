<?php

// Meu arquivo
$arquivo = 'backapi/venv/api/api.json';

// Cria o recurso (abrir o arquivo)
$handle = fopen( $arquivo, 'r' );

$ler = fread( $handle, filesize($arquivo) );

// Mostra dados na tela
echo $ler;
?>