<?php

// 5. Erros e Exceções
// Tratamento de Erros: Capturar e tratar erros para evitar que o programa quebre.
// Try quer dizer tentar, ou seja, ele tenta executar o código dentro dele. Se ocorrer um erro, ele pula para o bloco catch.
// Catch quer dizer pegar, ou seja, ele pega o erro que ocorreu no bloco try e executa o código dentro dele.

try {
    // código que pode gerar um erro
} catch (Exception $e) {
    // Exception é a classe base para todas as exceções no PHP. Ela captura qualquer exceção que ocorrer no bloco try.
    echo 'Erro: ' . $e->getMessage();
}

// Exemplo:
try {
    $x = 1 / 0;
    // Throwable é a interface/classe (genérica) base implementada por todas as exceções e erros no PHP 7. Ela captura qualquer exceção ou erro que ocorrer no bloco try.
} catch (Throwable $e) {
    echo 'Erro: ' . $e->getMessage(); // Saída: Erro: Division by zero
}