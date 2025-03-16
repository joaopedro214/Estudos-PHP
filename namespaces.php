<?php
// Namespace: permite organizar classes, interfaces, funções e constantes em um espaço de nomes. Isso evita conflitos de nomes entre diferentes partes de um programa, se há arquivos com nomes iguaisA. Exemplo:
// Tem um regra dela ter que ser inserida antes de tudo.
// Isso seria um diretório de arquivos. 
namespace MeuProjeto\Modelos\Calculo; 

class Exemplo {
    public function digaOla() {
        echo "Olá do MeuProjeto!";
    }
}
// Para acessar a classe Exemplo, usamos o caminho completo com o namespace: $exemplo = new MeuProjeto\Modelos\Calculo\Exemplo();
//
// Para importar um namespace, usamos a palavra-chave use. Isso permite usar o nome da classe sem o caminho completo. Exemplo:
// use MeuProjeto\Modelos\Calculo\Exemplo;
?>

<?php
// Se definirmos uma classe sem informar um namespace, ela será considerada parte do namespace global. Para acessar uma classe sem namespace, usamos o nome da classe diretamente. Exemplo:

namespace Financeiro;

class Relatorio {
    public function gerar() {
        // $conta = new \Conta; // Referência à classe Conta do namespace global
    }
} 
?> 
<?php
// PARA SABER MAIS: 
//
// Se quisermos importar todas as classes de um namespace, usamos a palavra-chave use seguida por um * e o nome do namespace. Exemplo:
// use MeuProjeto\Modelos\Calculo\*;
//
// Se em uma classe com namespace definido precisarmos acessar classes de outro namespace, precisamos adicionar o use ou informar seu nome completo (namespace + nome da classe). Exemplo:
// use MeuProjeto\Modelos\Calculo\Exemplo;
//
// Se quisermos importar um namespace com um alias, usamos a palavra-chave use seguida por um alias e o nome do namespace. Exemplo:
// use MeuProjeto\Modelos\Calculo as Calculo;
//
// Se quisermos importar um namespace com um alias para uma classe específica, usamos a palavra-chave use seguida por um alias, a palavra-chave as e o nome da classe. Exemplo:
// use MeuProjeto\Modelos\Calculo\Exemplo as ExemploCalculo;
//
// Se quisermos importar um namespace com um alias para todas as classes, usamos a palavra-chave use seguida por um alias, a palavra-chave as e um *. Exemplo:
// use MeuProjeto\Modelos\Calculo as Calculo;
//
// Outro detalhe interessante é que, se precisamos "importar" (com use) mais de uma classe do mesmo namespace, podemos fazer na mesma linha, envolvendo os nomes das classes em chaves. Por exemplo:
use Alura\Banco\
{
    CPF, Endereco
};


?>

