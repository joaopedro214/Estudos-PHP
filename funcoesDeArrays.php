<?php
$notas = [5, 10, 8, 2, 6, 9, 4];
// Ordena o array em ordem descrescente
rsort($notas);
// Extrai os três primeiros elementos do array 
// Pode exibir o tipo e o valor de qualquer expressão, incluindo variáveis, arrays, objetos, e resultados de funções.
$top3 = array_slice($notas, 0 , 3);
print_r($top3);
?>

<?php

$frase = "Joao Pedro, 2000, PHP";
// VAR_DUMP funcão, lê e exibe o tipo de dado e valor
var_dump(explode(", ", $frase));
?>

<?php
$nomes = array('Joao', 'Agata', 'Pedro', 'Valentina');

function ordenaNomes(array $nomes): array {
    sort($nomes);
    return $nomes;
}
$nomesOrdenados = ordenaNomes($nomes);
print_r($nomesOrdenados);
?>