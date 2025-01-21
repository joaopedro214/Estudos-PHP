<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Resultado</title>
</head>
<body>
    <?php
    // isset uma função usada pra verificar se uma variável foi definida e não é nula.
    if (isset($_GET['nome']) && !empty($_GET['nome'])) {
        // 1. GET É uma variável superglobal que coleta dados enviados em uma URL após o símbolo de interrogação (?). 
        // 2. É usado para enviar dados de forma visível na URL.
        // 3. Limitado pelo navegador e servidor.
        $nome = htmlspecialchars($_GET['nome']); 
        // htmlspecialchars para sanitizar a entrada do usuário e evitar ataques XSS.
        echo "Olá, " . $nome . "!"; } 
    else { 
        echo "Por favor, digite seu nome."; 
    }
    ?>
</body>
</html>
