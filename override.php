<?php

/* 
* Foi introduzido no PHP 8.3
*
* #[\override] indica que um método está sobrescrevendo (override) um método de uma função ou método existente.
*
* Ajuda a evitar erros caso o método na classe pai seja removido ou renomeado, pois o PHP lançará um erro se o método marcado com #[\Override] não estiver realmente sobrescrevendo um método existente.
*/

// Exemplo 1:
// classe pai
class Animal {
    public function fazerSom(): string {
        return "Som genérico";
    }
}

class Cachorro extends Animal {
    #[\Override]
    public function fazerSom(): string {
        return "Au au!";
    }
}

$cachorro = new Cachorro();
echo $cachorro->fazerSom(); // Saída: "Au au!"



/*
*-------- Quando não usar---------
*
* #[\override] não pode ser utilizado para sobrescrever uma classe construtora.
*
* Não pode ser utilizado em classes construtoras.
*
* Métodos que não existem na classe pai.
*/

// Exemplo 1:
// Método miar não existe na classe pai
/* class Animal {
    public function fazerSom(): string {
        return "Som genérico";
    }
}
class Gato extends Animal {
    #[\Override] // ❌ ERRO: "miar" não existe na classe pai.
    public function miar(): string {
        return "Miau!";
    }
} */
