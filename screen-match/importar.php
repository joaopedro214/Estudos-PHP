<?php

$caminhoArquivo = __DIR__ . '/filme.json';
$conteudoAquivoFilme = file_get_contents($caminhoArquivo);
$filme = json_decode($conteudoArquivoFilme, true);

var_dump($filme);

