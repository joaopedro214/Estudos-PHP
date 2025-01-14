<?php
$titular = "João";
$saldoAtual = 1000;

function menu() {
    global $titular;
    global $saldoAtual;
    echo "\n";
    echo "************\n";
    echo "Titular: $titular\n";
    echo "Saldo atual: R$$saldoAtual\n";
    echo "************\n";
    echo "1. Consultar saldo atual\n";
    echo "2. Sacar valor\n";
    echo "3. Depositar valor\n";
    echo "4. Sair\n";
    echo "\n";
}

function sacar() {
    global $titular;
    global $saldoAtual;
    echo "Digite a quantia que deseja sacar: ";
    $valor = (float) trim(fgets(STDIN));

    if($valor <= $saldoAtual) {
        $saldoAtual -= $valor;
        echo "Você sacou o valor R$$valor, saldo restante R$$saldoAtual.";
    }else{
        echo "Saldo insuficiente, saldo R$$saldoAtual.";
    }
}

function saldo_atual() {
    global $titular;
    global $saldoAtual;
    echo "Seu saldo atual é R$$saldoAtual";
}

function depositar_valor() {
    global $titular;
    global $saldoAtual;
    echo "Digite o valor a depositar: ";
    $deposito = (float) trim(fgets(STDIN));
    if($deposito > 0) {
        $saldoAtual += $deposito;  
        echo "Você depositou R$$deposito e seu saldo é de R$$saldoAtual."; 
    }elseif($deposito <= 0) {
        echo "Não é possível depositar valores menores ou iguais a 0.";
    }else {
        echo "Opção inválida.";
    }
}

while (true) {
    menu(); 
    $escolha = intval(trim(fgets(STDIN))); 
    if ($escolha == 1) { 
        saldo_atual(); 
    }elseif ($escolha == 2) { 
        sacar();
    }elseif ($escolha == 3) { 
        depositar_valor(); 
    }elseif ($escolha == 4) { 
        echo "Saindo...\n"; 
        break; 
    }else { 
        echo "Opção inválida.\n"; 
    }   
}