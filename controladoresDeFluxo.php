<?php
// Controladores de fluxo (ou estruturas de controle de fluxo) são elementos essenciais em linguagens de programação, como PHP. Eles são responsáveis por determinar o caminho que o programa seguirá com base em certas condições ou repetições. Em outras palavras, eles controlam o fluxo da execução do código. Aqui estão os principais tipos:

// 1. Estruturas Condicionais
// if: Executa um bloco de código se uma condição for verdadeira.

if ($a > $b) {
    echo "a é maior que b";
} elseif ($a == $b) {
    echo "a é igual a b";
} else {
    echo "a é menor que b";
}

// 2. Estruturas de Loop/Repetição
// for: Repete um bloco de código um número específico de vezes.
// Estrutura for (inicialização; condição da repetição; incremento;)
for ($i = 0; $i < 10; $i++) {
    echo $i;
}

// while: Repete um bloco de código enquanto uma condição for verdadeira. i é igual a índice, também chamado de contador.
$i = 0;
while ($i < 10) {
    echo $i;
    $i++;
}

// do...while: Similar ao while, mas garante que o bloco de código seja executado pelo menos uma vez antes de testar a condição.
$i = 0;
do {
    echo $i;
    $i++;
} while ($i < 10);

// foreach: Itera sobre todos os elementos de um array ou objeto.
// o operador as é utilizado no loop foreach para percorrer os elementos de um array.
$array = ["maçã", "banana", "laranja"];
foreach ($array as $fruta) {
    echo $fruta;
}


// 3. Switch
// switch: Permite selecionar entre muitas opções com base no valor de uma expressão.
$dia = "segunda";
switch ($dia) {
    case "segunda":
        echo "Hoje é segunda-feira.";
        break;
    case "terça":
        echo "Hoje é terça-feira.";
        break;
    default:
        echo "Hoje não é segunda nem terça.";
}


// 4. Match
// match: é uma expressão que compara um valor contra múltiplas alternativas
$message = match ($statusCode) {
    200, 300 => 'OK',
    400 => 'error',
    default => 'unknown status code',
};


// 5. Operador ternário
// operador ternário (?:): é uma forma compacta de estrutura condicional if...else. Ele avalia uma expressão e retorna um valor com base na condição.
// Sintaxe: condição ? valor_se_verdadeiro : valor_se_falso;
$idade = 18;
$status = ($idade >= 18) ? 'adulto' : 'menor';
echo $status;



// 6. Operador de Coalescência Nula (??)
// é útil para controlar o fluxo quando se quer verificar a presença de um valor ou utilizar um valor padrão.
// Retorna o valor da variável ou um valor padrão se a variável for null
$nome = $input['nome'] ?? 'Visitante';
echo $nome;
