<?php

// 3. Manipulação de Strings
// Concatenação: Unir duas ou mais strings.
$nome = "João";
$saudacao = "Olá, " . $nome . "!";

// Concatenação e Interpolação
echo "Nome do filme:" . "\n" . $nomeFilme ; // Concatenação, os pontos são para fazer a concatenação
echo "Nome do filme:\n$nomeFilme"; // Interpolação

// Funções de String: Ferramentas para trabalhar com strings (ex. strlen, substr, str_replace).
echo strlen("Hello World"); // 11


// 4. Sessões e Cookies
// Sessões: Guardar informações do usuário ao longo da navegação no site.
session_start();
$_SESSION['user'] = "João";
// Cookies: Guardar informações no navegador do usuário.
setcookie("user", "João", time() + (86400 * 30), "/");


// 5. Erros e Exceções
// Tratamento de Erros: Capturar e tratar erros para evitar que o programa quebre.
try {
    // código que pode gerar um erro
} catch (Exception $e) {
    echo 'Erro: ' . $e->getMessage();
}