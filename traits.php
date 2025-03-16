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
?>

<?php
// Traits no PHP são um mecanismo que permite reutilizar código em classes diferentes, sem necessidade de herança múltipla (que o PHP não suporta diretamente). Elas foram introduzidas no PHP 5.4 e oferecem uma forma de compartilhar métodos entre classes.
// Uma trait é similar a uma classe, mas seu único propósito é agrupar funcionalidades de forma que possam ser "importadas" em outras classes. Você pode pensar em traits como "pedaços de implementação" que podem ser inseridos em classes.
// Exemplo de uso de traits:
trait Logger {
    public function log($message) {
        echo date('Y-m-d H:i:s') . ': ' . $message . "\n";
    }
}

class Usuarios {
    use Logger;
    
    public function salvar() {
        $this->log('Usuário foi salvo');
        // código para salvar o usuário
    }
}

class Produto {
    use Logger;
    
    public function atualizar() {
        $this->log('Produto foi atualizado');
        // código para atualizar o produto
    }
}
?>
<?php
// Características importantes das traits:
/*
Resolução de conflitos: Você pode usar várias traits em uma classe e resolver conflitos de nomes de métodos usando insteadof e as.

Modificadores de acesso: Você pode alterar a visibilidade de métodos importados de uma trait.

Propriedades: Traits podem definir propriedades, mas com algumas limitações.

Métodos abstratos: Traits podem definir métodos abstratos que devem ser implementados pelas classes que as utilizam. 
*/
// Exemplo de uso de traits com resolução de conflitos:
trait A {
    public function teste() {
        echo "Trait A\n";
    }
}

trait B {
    public function teste() {
        echo "Trait B\n";
    }
}

class MinhaClasse {
    use A, B {
        B::teste insteadof A; // Usar o método teste de B em vez de A
        A::teste as testeA;   // Renomear o método teste de A para testeA
    }
}

?>