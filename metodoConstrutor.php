<?php
// Qualquer método no php você encontra digitando dois underlines
// Vem para tornar o código melhor do que com getters e setters. 
// O principal objetivo do construtor é inicializar as propriedades do objeto ou executar qualquer código que precisa ser configurado na criação do objeto.
// Ele é automaticamente chamado quando um novo objeto de uma classe é criado.
class Pessoa {
    private $nome;
    private $idade;

    // Construtor da classe Pessoa
    public function __construct($nome, $idade) {
        // A propriedade nome vai ter o valor do parâmetro $nome
        $this->nome = $nome; // Inicializa a propriedade $nome
        $this->idade = $idade; // Inicializa a propriedade $idade
    }

    public function apresentar() {
        return "Olá, meu nome é " . $this->nome . " e eu tenho " . $this->idade . " anos.";
    }
}
// Criando um novo objeto da classe Pessoa
$pessoa = new Pessoa("Maria", 30);
echo $pessoa->apresentar(); // Imprime "Olá, meu nome é Maria e eu tenho 30 anos."

// Definição do Construtor: O método __construct é definido dentro da classe e recebe parâmetros ($nome e $idade) que serão usados para inicializar as propriedades do objeto.

// Inicialização das Propriedades: Dentro do construtor, usamos $this->nome = $nome; e $this->idade = $idade; para definir os valores das propriedades privadas com base nos argumentos passados ao criar o objeto.

// Criação do Objeto: Quando criamos um novo objeto da classe Pessoa usando new Pessoa("Maria", 30);, o construtor __construct é chamado automaticamente com os valores "Maria" e 30.

// Vantagens do Construtor:
// Inicialização Simplificada: Permite inicializar as propriedades do objeto de forma organizada e direta.
// Configuração Inicial: Permite executar qualquer lógica inicial necessária para configurar o objeto.




// -------EVOLUÇÃO DO CONSTRUTOR-------

// Para tornar o código menos verboso. Devido a repetição desde a declaração das variável na classe, depois repete-se na passagem das propriedades no método e depois repete novamente os parâmetros no this.
// Para isso o PHP permite inserir o encapsulamento(private...) diretamente no método, dessa forma:
// Detalhe isso só funciona para o método construtor.

class Filme {
    // Não precisa por aqui.
    // Fica direto passado como parâmetro, desse modo transformando-se em uma propriedade.
    // E as propridades sempre devem ser tipadas, pois por padrão o valor é null.
    public function __construct(private string $nome, private int $anoLancamento, private string $genero, private float $notas){
        //E nem aqui.
    }

    public function getanoLancamento(): int {
        return $this->anoLancamento;
    }
}

// Se adicionarmos a palavra reservada "readonly" podemos retirar o modificador de acesso "public".
class Filme2 {
    // Não precisa por nada aqui.
    public function __construct(
        public readonly string $nome, 
        public readonly int $anoLancamento, 
        public readonly string $genero, 
        public readonly float $notas)
    {
        //E nem aqui.
    }

    public function getanoLancamento(): int {
        return $this->anoLancamento;
    }
}