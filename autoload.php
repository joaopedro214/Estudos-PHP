<?php
// É responsável por carregar automaticamente as classes do projeto.
// Exemplo de autoload:

// A função abaixo substitui o namespace ScreenMatch por src e adiciona a extensão .php ao nome da classe, inclui o arquivo correspondente, subtitui as barras investidas por normais, constrói o caminho completo do arquivo que deve ser incluído e por fim valida se o arquivo existe ou não antes de incluir.

// spl_autoload_register — Registra qualquer número de autoloaders, permitindo que classes e interfaces sejam automaticamente carregadas se ainda não foram definidas.
spl_autoload_register(function (string $className) {
    // Substitui ScreenMatch por src e adiciona a extensão .php
    $caminho = str_replace('ScreenMatch', 'src', $className) . '.php';
    // Substitui as barras invertidas por barras normais
    $caminho = str_replace('\\', DIRECTORY_SEPARATOR, $caminho);

    // __DIR__ é uma constante que retorna o diretório do arquivo atual
    $caminhoCompleto = __DIR__ . DIRECTORY_SEPARATOR . $caminho;
    
    // Se o arquivo existir, ele é incluído
    if(file_exists($caminhoCompleto)) {
        require_once $caminhoCompleto;
    }
});
// PARA SABER MAIS SOBRE AUTOLOADER:

// Uma boa prática para o autoloader é criar um arquivo autoload.php na raiz do projeto e incluí-lo no início de todos os arquivos PHP. Assim, todas as classes do projeto serão carregadas automaticamente.

// Esse autoloader de exemplo segue o padrão PSR-4, que é um padrão de autoload recomendado pela PSR (PHP Standard Recommendation). Ele é baseado em namespaces e diretórios, e permite que as classes sejam carregadas automaticamente de acordo com a estrutura de diretórios do projeto.

// Por baixos dos panos o autoloader registra uma função anônima com spl_autoload_register, que é chamada toda vez que uma classe é instanciada e não foi carregada ainda.  
?>