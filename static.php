<?php

// É usada para declarar propriedades e métodos estáticos em uma classe. Propriedades e métodos estáticos pertencem à classe em si, e não a instâncias específicas da classe. Isso significa que você pode acessar uma propriedade ou método estático sem criar um objeto da classe. Exemplo:
class Contador {
    public static $total = 0;
    
    public static function incrementar() {
        self::$total++;
    }
}

// Acessando a propriedade estática sem criar uma instância da classe
echo Contador::$total; // Saída: 0
Contador::incrementar();
echo Contador::$total; // Saída: 1
// No exemplo acima, $total é uma propriedade estática da classe Contador. Você pode acessá-la diretamente usando Contador::$total sem criar uma instância da classe.

// Exemplo 2: 
class Utilidades {
    public static function saudacao($nome) {
        return "Olá, $nome!";
    }
}

// Chamando o método estático sem criar uma instância da classe
echo Utilidades::saudacao("Maria"); // Saída: Olá, Maria!

/* Benefícios de Usar static
Acesso Global: Propriedades e métodos estáticos podem ser acessados globalmente sem a necessidade de instanciar a classe.

Compartilhamento de Estado: Propriedades estáticas podem ser usadas para manter informações compartilhadas entre todas as instâncias de uma classe.

Utilização de Recursos Comuns: Métodos estáticos são úteis para funções utilitárias que não dependem do estado do objeto. */