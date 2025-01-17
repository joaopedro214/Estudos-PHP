<?php
// Fopen => Abre um arquivo ou URL
$arquivo = fopen('teste.txt', 'r');
// fgets (file get string) => pega string no arquivo
$primeiraLinha = fgets($arquivo);
fclose($arquivo);
?>

<?php
$nomeArquivo = 'teste.txt';
$novaFrase = "\nPHP é incrível!";

// Abre o arquivo para escrita no final
$arquivo = fopen($nomeArquivo, 'a');
// Escreve no arquivo
fwrite($arquivo, $novaFrase);
// Fecha o arquivo
fclose($arquivo);
?>

<?php
$stringJson = '{"nome":"Vinicius","anoNascimento":1997,"profissao":"Dev"}';
var_dump(json_decode($stringJson, true));
?>