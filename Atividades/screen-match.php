<?php

echo "Bem-vindo(a) ao screen match!
";

$nomeFilme = "Top Gun - Maverick";
$anoLancamento = 2022;
$notaFilme =  8.8;
$incluidoNoPlano = true;

$quantidadeDeNotas = $argc - 1;
$notas = [];

for ($contador = 1; $contador < $argc; $contador++) {
    $notas[] = (float) $agrv[$contador];
}

$somaDeNotas = 0;
foreach ($notas as $nota) {
    $somaDeNotas += $nota;
}

$notaFilme = $somaDeNotas / $quantidadeDeNotas;
$planoPrime = true;

$incluidoNoPlano = $planoPrime ||  $anoLancamento < 2020;

echo "Nome do filme:" . $nomeFilme . "\n";
echo "Nota do filme: $notaFilme\n"; 
echo "Ano de lançamento: $anoLancamento\n";

if ($anoLancamento > 2022) {
    echo "Esse filme é um lançamento";
} elseif($anoLancamento > 2020 && $anoLancamento <= 2022) {
    echo "Esse filme ainda é novo";
} else {
    echo "Esse filme não é um lançamento";
}

$filme = [
    "nome" => "Thor: Ragnarok",
    "ano" =>  2021,
    "nota" => 7.8,
    "genero" => "super-herói",
];