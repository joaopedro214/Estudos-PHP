<?php
// Código inicial, sem robustez e livre para ser manipulado.
class Conta
{
    private int $saldoEmCentavos;
    private string $nomeTitular;
    private string $numeroConta;

    public function setSaldoEmCentavos(int $saldoEmCentavos): void
    { 
        // Ao usar this, está dizendo que deseja acessar algo que pertence ao objeto atual.
        $this->saldoEmCentavos = $saldoEmCentavos;
    }

    public function getSaldoEmCentavos(): int
    {
        return $this->saldoEmCentavos;
    }

    public function setNomeTitular(string $nomeTitular): void
    {
        // Aqui estamos usando $this para acessar a propriedade $nome do objeto atual
        $this->nomeTitular = $nomeTitular;
    }

    public function getNomeTitular(): string
    {
        return $this->nomeTitular;
    }

    public function setNumeroConta(int $numeroConta): void
    {
        $this->numeroConta = $numeroConta;
    }

    public function getNumeroConta(): string
    {
        return $this->numeroConta;
    }
}
?>

<?php
// Código um pouco mais rubusto e melhor estruturado
class Conta2
{
    // Propriedades privadas da classe Conta
    private int $saldoEmCentavos; // Armazena o saldo em centavos
    private string $nomeTitular;  // Armazena o nome do titular da conta
    private string $numeroConta;  // Armazena o número da conta

    // Método para depositar saldo na conta
    public function depositar(int $valorADepositar): void
    {
        // Verifica se o valor a depositar é positivo
        if ($valorADepositar > 0) {
            $this->saldoEmCentavos += $valorADepositar; // Adiciona o valor ao saldo
        }
    }

    // Método para sacar saldo da conta
    public function sacar(int $valorASacar): void
    {
        // Verifica se o valor a sacar é positivo e se há saldo suficiente
        if ($valorASacar > 0 && $valorASacar <= $this->saldoEmCentavos) {
            $this->saldoEmCentavos -= $valorASacar; // Subtrai o valor do saldo
        }
    }

    // Método getter para obter o saldo em centavos
    public function getSaldoEmCentavos(): int
    {
        return $this->saldoEmCentavos; // Retorna o saldo atual da conta
    }

    // Método setter para definir o nome do titular da conta
    public function setNomeTitular(string $nomeTitular): void
    {
        $this->nomeTitular = $nomeTitular; // Define o nome do titular
    }

    // Método getter para obter o nome do titular da conta
    public function getNomeTitular(): string
    {
        return $this->nomeTitular; // Retorna o nome do titular da conta
    }

    // Método setter para definir o número da conta
    public function setNumeroConta(int $numeroConta): void
    {
        $this->numeroConta = $numeroConta; // Define o número da conta
    }

    // Método getter para obter o número da conta
    public function getNumeroConta(): string
    {
        return $this->numeroConta; // Retorna o número da conta
    }
}
?>