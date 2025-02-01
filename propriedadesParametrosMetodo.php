<?php
// Namespace: permite organizar classes, interfaces, funções e constantes em um espaço de nomes. Isso evita conflitos de nomes entre diferentes partes de um programa. Exemplo:
// Antes estava depois de "interface". Tive que por aqui por primeiro devido a regra dela ter que ser insrida antes de tudo.
namespace MeuProjeto;

class Exemplo {
    public function digaOla() {
        echo "Olá do MeuProjeto!";
    }
}
?>

<?php

// Parâmetro: é uma variável utilizada em uma função ou método.

// Propriedade: é uma variável pertencente a um objeto ou classe.

// Classe: é um modelo ou blueprint para criar objetos. Ela define um conjunto de propriedades e métodos que serão comuns a todos os objetos criados a partir dessa classe. Exemplo:
class Carro {
    private $marca;
    private $modelo;
    
    public function __construct($marca, $modelo) {
        $this->marca = $marca;
        $this->modelo = $modelo;
    }
    
    public function detalhes() {
        return "Marca: $this->marca, Modelo: $this->modelo";
    }
}

// Objeto: é uma instância de uma classe. Ele é criado a partir de uma classe e herda todas as propriedades e métodos da classe. Exemplo:
$meuCarro = new Carro("Toyota", "Corolla");
echo $meuCarro->detalhes();

// Função: é um bloco de código que pode ser chamado repetidamente. Funções podem receber parâmetros e retornar valores. Exemplo:
function soma($a, $b) {
    return $a + $b;
}

// Método: é uma função definida dentro de uma classe. Métodos podem acessar e modificar as propriedades da classe. Exemplo:
class Calculadora {
    public function soma($a, $b) {
        return $a + $b;
    }
}

// Construtor: é um método especial que é chamado automaticamente quando um objeto de uma classe é criado. Ele é usado para inicializar propriedades do objeto. Exemplo: 
class Carro2 {
    private $marca2;
    private $modelo2;

    public function __construct($marca2, $modelo2) {
        $this->marca2 = $marca2;
        $this->modelo2 = $modelo2;
    }
}

// Herança: é um princípio da POO que permite que uma classe herde as propriedades e métodos de outra classe. A classe que herda é chamada de classe filha, e a classe da qual ela herdaa ée chamada de classe pai. Exempĺo:
class Veiculo {
    public $cor;
    
    public function __construct($cor) {
        $this->cor = $cor;
    }
    
    public function mostrarCor() {
        return "Cor: $this->cor";
    }
}

class Moto extends Veiculo {
    public $marca;
    
    public function __construct($cor, $marca) {
        parent::__construct($cor);
        $this->marca = $marca;
    }
    
    public function detalhes() {
        return "Marca: $this->marca, " . $this->mostrarCor();
    }
}

// interface: define um conjunto de métodos que uma classe deve implementar, mas não fornece a implementação desses métodos. É uma forma de garantir que diferentes classes implementem os mesmos métodos.  
// Uma interface é similar a uma classe abstrata, mas todos os seus métodos são abstratos (não têm implementação). Uma classe que implementa uma interface deve fornecer implementações para todos os métodos da interface. Exemplo:
interface Animal {
    public function fazerSom();
}

class Cachorro implements Animal {
    public function fazerSom() {
        echo "Latido";
    }
}
?>

<?php
// Trait: é um mecanismo que permite reutilizar código em várias classes. Ele é similar a uma classe, mas não pode ser instanciado diretamente. As traits permitem adicionar métodos a classes sem usar herança. Exemplo:
trait Saudacao {
    public function digaOla() {
        echo "Olá!";
    }
}

class Usuario {
    use Saudacao;
}

$usuario = new Usuario();
$usuario->digaOla();

// Constante é uma variável cujo valor não pode ser alterado depois de definido. Palavra-chave const.

// Abstração: é o conceito de ocultar os detalhes internos de uma implementação e mostrar apenas a funcionalidade essencial. Em PHP, isso é frequentemente realizado com classes e interfaces abstratas. 
// Uma classe abstrata é uma classe que não pode ser instanciada diretamente. Ela pode conter métodos abstratos (que não têm implementação) e métodos concretos (com implementação). As classes que herdam de uma classe abstrata precisam implementar os métodos abstratos. Exemplo:
abstract class Forma {
    abstract public function calcularArea();
}

class Retangulo extends Forma {
    private $largura;
    private $altura;
    
    public function __construct($largura, $altura) {
        $this->largura = $largura;
        $this->altura = $altura;
    }
    
    public function calcularArea() {
        return $this->largura * $this->altura;
    }
}

// Encapsulamento: é a prática de restringir o acesso a certas propriedades ou métodos de um objeto. Em PHP, isso é feito usando modificadores de acesso public, protected e private.

//