<?php
$filme = [
    "nome" => "Thor: Ragnarok",
    "ano" => 2021,
    "nota" => 7.8,
    "genero" => "super-herói",
];
// Converte um array ou objeto PHP em uma string JSON. Isso é útil quando você precisa enviar dados do servidor para o navegador ou API em formato JSON.
echo json_encode($filme);

// Converte uma string JSON em um array ou objeto PHP. Isso é útil quando você recebe dados em formato JSON e precisa processá-los no servidor.
// A função json_decode vai receber uma string como primeiro parâmetro e transformá-la em um objeto por padrão. Ao passar true como segundo parâmetro, o PHP retornará um array associativo ao invés de um objeto.
var_dump(json_decode('$filme', true));