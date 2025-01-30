<?php
// Por que encapsular?
// Para controlar o acesso aos dados, garantindo a integridade das informações.
// Ao garantir que os valores só serão acessados através dos métodos que conhecemos na classe, conseguimos garantir que tais valores sempre estarão em um estado consistente.

// Getter e Setters são sinônimo de encapsulamento quando falamos de POO.
// São métodos usados para acessar e modificar propriedades privadas de uma classe.

// Getters
// São usados para obter o valor de uma propriedade privada. Eles geralmente são nomeados com o prefixo "get" seguido do nome da propriedade, como getNome()
class Pessoa1 {
    private $nome;

    public function __construct($nome) {
        $this->nome = $nome;
    }

    public function getNome() {
        return $this->nome;
    }
}

$pessoa = new Pessoa1("João");
echo $pessoa->getNome(); // Imprime "João"

// Setters
// são usados para definir o valor de uma propriedade privada. Eles são geralmente nomeados com o prefixo "set" seguido do nome da propriedade, como setNome()
class Pessoa2 {
    private $nome;

    public function __construct($nome) {
        $this->nome = $nome;
    }

    public function getNome() {
        return $this->nome;
    }

    public function setNome($nome) {
        $this->nome = $nome;
    }
}

$pessoa = new Pessoa2("João");
echo $pessoa->getNome(); // Imprime "João"
$pessoa->setNome("Maria");
echo $pessoa->getNome(); // Imprime "Maria"
