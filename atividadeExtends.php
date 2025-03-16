<?php
// Tarefa: Crie uma classe ContaBancaria com métodos para realizar operações bancárias como depositar(), sacar() e consultarSaldo(). Em seguida, crie uma subclasse ContaCorrente que herda da classe ContaBancaria. Adicione um método específico para a subclasse, como cobrarTarifaMensal(), que desconta uma tarifa mensal da conta corrente.
//Além disso, no método sacar() da ContaCorrente, cobre uma taxa de saque também. Armazene essa taxa como uma constante da classe.

// Minha versão da tarefa.
class ContaBancaria 
{
    protected int $consultarSaldo = 0;

    public function __construct
    (
        int $depositar = 0, 
        int $sacar = 0,
        int $consultarSaldo = 0
    )
    { 
        $this->consultarSaldo = $consultarSaldo;
    }

    public function depositar(int $depositar): void {
        if ($depositar > 0){
            $this->consultarSaldo += $depositar; 
        } 
    }

    public function sacar(int $sacar): void {
        if ($sacar > 0){
            $this->consultarSaldo -= $sacar;
        }
    }

    public function consultarSaldo(): void {
        echo $this->consultarSaldo;
    }
}

class ContaCorrente extends ContaBancaria 
{
    const float taxa = 0.001;

public function __construct 
(
    int $depositar = 0,
    int $sacar = 0,
    int $consultarSaldo = 0, 
    int $cobrarTarifaMensal = 0
) 
{
    parent::__construct($depositar, $sacar, $consultarSaldo);
}

    public function cobrarTarifaMensal(int $sacar): void {
        if ($sacar > 20)  {
            $this->consultarSaldo -= $sacar * self::taxa; 
        }
    }
}
?>

<?php
// Versão do professor
class ContaBancaria2
{
    private int $saldo;

    public function sacar(int $valorASacar): void
    {
        if ($valorASacar > 0 && $this->saldo >= $valorASacar) {
            $this->saldo -= $valorASacar;
        }
    }

    public function depositar(int $valorADepositar): void
    {
        if ($valorADepositar > 0) {
            $this->saldo += $valorADepositar;
        }
    }
    public function consultarSaldo(): float
        {
            return $this->saldo;
        }
}

class ContaCorrente2 extends ContaBancaria2
{
    // 0.5%
    private const float TAXA_SAQUE = 0.005;
    // R$ 5,00
    private const float TARIFA_MENSAL = 5_00;

    public function cobrarTarifaMensal(): void
    {
        $this->saldo -= self::TARIFA_MENSAL;
    }

    #[Override]
    // Override Esse atributo sobreescreve os métodos marcados por ela
    public function sacar(int $valorASacar): void
    {
        $saqueTotal = $valorASacar + $valorASacar * self::TAXA_SAQUE;

        if ($saqueTotal > 0 && $this->saldo >= $saqueTotal) {
            $this->saldo -= $saqueTotal;
        }
    }
}
?>