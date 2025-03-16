<?php
// É quando queremos evitar a duplicação de código, quando por exemplo temos uma classe Filme e uma classe Série, e ambas possuem informações em comum, então podemos criar uma classe Título onde se concentram as informações em comum de ambas e que se extende para as classes Filme e Série, deixando elas para porem somentes suas particularidades. Exemplo

class Serie extends Titulo
{
    public function __construct(
        public readonly int $temporadas,
        public readonly int $epsodiosPorTemporadas,
        public readonly int $minutosPorEpisodio
    ){
    }
}
?>

<?php
class Filme extends Titulo
{
    public function __construct(
        public readonly int $duraçãoEmMinutos,
    ){
    }
}
?>

<?php
class Titulo{

    private array $notas;

    public function __construct(
        public readonly string $nome, 
        public readonly int $anoLancamento, 
        public readonly Genero $genero,
    ){
        $this->notas = []; 
    }

    public function avalia(float $nota): void
    {
        $this->notas[] = $nota;
    }

    public function media(): float
    {
        $somaNotas = array_sum($this->notas);
        $quantidadeNotas = count($this->notas);

        return $somaNotas / $quantidadeNotas;
    }
}
?>

<?php
enum Genero{
    case Acao;
    case Comedia;
    case Terror;
    case SuperHeroi;
    case Drama;
}
?>