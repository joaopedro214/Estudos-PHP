<?php

$filme = [
    // 1. POST É uma variável superglobal que coleta dados enviados através de um formulário HTML usando o método POST. 
    // 2. Ideal para enviar dados de forma invisível na URL, geralmente usado para enviar informações mais sensíveis, como senhas.
    // 3. Limitado principalmente pela configuração do servidor.
    'nome' => $_POST['nome'],
    'anoLancamento' => $_POST['ano'],
    'nota' => $_POST['nota'],
    'geenero' => $_POST['genero'],
];

file_put_contents('filme.json', json_encode($filme));