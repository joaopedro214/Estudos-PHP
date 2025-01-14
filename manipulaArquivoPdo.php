<?php

// 6. Manipulação de Arquivos
// Leitura e Escrita de Arquivos: Trabalhar com arquivos no sistema de arquivos.
$file = fopen("arquivo.txt", "r");
while(!feof($file)) {
    echo fgets($file) . "<br>";
}
fclose($file);

// 7. PDO (PHP Data Objects)
// Conexão com Banco de Dados: Usar PDO para acessar e manipular bancos de dados.
$pdo = new PDO('mysql:host=localhost;dbname=test', 'root', '');
$stmt = $pdo->query('SELECT * FROM tabela');
while ($row = $stmt->fetch()) {
    echo $row['coluna'];
}