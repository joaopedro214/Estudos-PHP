<?php
// Defido os tipo de contas com enum
enum tipoContas {
    case Corrente;
    case Investimento;
    case Salario;
    case Poupanca;

    // Abro function que retorna um valor boolean
    public function possuiTaxa(): bool
    {   // Retorno o valor boolean calculado usando match
        // Lendo fica: Retorne o correspondente(esse), tipoConta::Corrente => verdadeiro
        // this-> é uma referência ao objeto atual
        return match($this) {
            tipoContas::Corrente, tipoContas::Investimento => true,
            tipoContas::Salario, tipoContas::Poupanca => false,
        };
    }
}

class conta {
    public static int $saldo = 0;

    public function __construct(
        public readonly string $nomeTitular,
        public readonly tipoContas $tipo,
    ){}

    public function depositar(int $valorDeposito) {
        if ($valorDeposito > 0){
            // Acesso a variável $saldo defina na classe, usando $this->
            conta::$saldo += $valorDeposito;
        }
    }

    public function sacar(int $valorSaque){
        if($valorSaque > 0 && $valorSaque < conta::$saldo){
            conta::$saldo -= $valorSaque;
        }
    }

    // Método static para retornar o saldo
    public static function getSaldo(): int {
        return self::$saldo;
    }
    // Método que retorna o nome e o tipo da conta
    public function detalhesDaConta(): string {
        return "Nome: " . $this->nomeTitular . ", tipo de conta: " . $this->tipo->name; 
    }
   // name refere-se ao valor da propriedade do enum tipoContas    
}

$conta = new conta('Neide',tipoContas::Corrente);
echo $conta->detalhesDaConta() . PHP_EOL;
$conta-> depositar(1000);
echo "Saldo após depósito: " . $conta::getSaldo() . PHP_EOL; // Exibe o saldo após o depósito
$conta-> sacar(500);
echo "Saldo após saque de 500: " . $conta::getSaldo() . PHP_EOL; // Exibe o saldo após o saque
// PHP_EOL é uma constante em PHP que representa o caractere de fim de linha (end of line) apropriado para a plataforma em que o script PHP está sendo executado. Ele ajuda a garantir que o seu código seja portátil e funcione corretamente em diferentes sistemas operacionais.
// Em sistemas baseados em UNIX (como Linux e macOS), PHP_EOL é equivalente a "\n" (nova linha). Em sistemas Windows, PHP_EOL é equivalente a "\r\n" (retorno de carro seguido de nova linha).