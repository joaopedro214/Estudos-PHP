<?php
$arquivo = fopen('teste.txt', 'r');
$primeiraLinha = fgets($arquivo);
fclose($arquivo);
echo $primeiraLinha;
?>

<?php
$arquivo = fopen('teste.txt', 'r');
file_put_contents(__DIR__ . '/teste.txt' ,  'PHP é incrível!');
fclose($arquivo);
echo $primeiraLinha;
?>

<?php
$dadosPessoa = '{"nome":"Joao","anoNascimento":2000,"profissao":"Dev"}';
var_dump(json_decode($dadosPessoa, true));
?>