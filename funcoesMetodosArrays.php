<?php

// 1. Funções e Métodos
// Funções: Blocos de código que podem ser reutilizados ao longo do programa. Podem receber parâmetros e retornar valores.
function soma($a, $b) {
    return $a + $b;
}
echo soma(3, 4); // 7


//Métodos: Funções que pertencem a classes (utilizados em Programação Orientada a Objetos).
class Calculadora {
    public function soma($a, $b) {
        return $a + $b;
    }
}
$calc = new Calculadora();
echo $calc->soma(3, 4); // 7


// 2. Arrays
// Arrays Simples: Coleções ordenadas de valores.
$frutas = ["maçã", "banana", "laranja"];

// Arrays Associativos: Coleções de pares chave-valor.
$idade = ["João" => 25, "Maria" => 22];

// Arrays Multidimensionais: Arrays que contêm outros arrays.
$matriz = [
    [1, 2, 3],
    [4, 5, 6],
    [7, 8, 9]
];

