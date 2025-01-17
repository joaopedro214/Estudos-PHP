<?php
// DIR constante muito utilizada para inserir um caminho absoluto de um arquivo com diretório relativo.
$caminhoArquivo = __DIR__ . '/filme.json';
// file_get_contents pega o conteúde de um arquivo
$conteudoAquivoFilme = file_get_contents($caminhoArquivo);
// json_decode decodifica um json, recebe uma string como primeiro parâmetro e transformá-la em um objeto por padrão.
$filme = json_decode($conteudoArquivoFilme, true);
var_dump($filme);
?>

<?php
$data = array("name" => "João", "age" => 30, "city" => "Caxias do Sul");
// json_encode converte um array ou objeto PHP em uma string JSON.
// Muito útil quando você precisa enviar dados do servidor para o navegador ou API em formato JSON.
$json = json_encode($data);
echo $json;
// Saída => {"name":"João","age":30,"city":"Caxias do Sul"} 
?>

<?php
// Dados a serem escritos no arquivo
$dados = "Olá, mundo!";
// Caminho do arquivo
$arquivo = 'teste.txt';
// file_put_contents => utilizada para escrever os dados nos arquivos
file_put_contents($arquivo, $dados);
echo "Dados escritos com sucesso!";
?>
