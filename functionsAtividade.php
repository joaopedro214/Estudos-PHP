<?php
echo "Informe um número para x: ";
$x = (int) fgets(STDIN);
echo "Informe um número para y: ";
$y = (int) fgets(STDIN);

function numInteiros(int $x, int $y): string {
    return $a = $x + $y;   
}
echo "Resultado é " . numInteiros($x, $y) . "\n"; 
?>

<?php // Forma do professor, eu ajustei um pouco
echo "Digite uma operação matemática que deseja fazer dentre as 4 tradicionais: ";
$operacao = trim(fgets(STDIN));
echo "Digite o número 1: ";
$numero1 = (int) trim(fgets(STDIN));
echo "Digite o número 2: ";
$numero2 = (int) trim(fgets(STDIN));

function operacaoMatematica(int $numero1, int $numero2, string $operacao): string {
    return match($operacao) {
        'soma' => $numero1 + $numero2,
        'subtração' => $numero1 - $numero2,
        'divisão' => $numero1 / $numero2, // Aqui você poderia pensar no caso de divisão por 0 ;-)
        'multiplicação' => $numero1 * $numero2,
        default => 'Operação inválida. Por favor, escolha dentre soma, subtração, divisão e multiplicação. \n',
    };
}
echo "O resultado é:" . operacaoMatematica($numero1, $numero2, $operacao); 
?>

<?php
    echo "IMC\nDigite sua massa: ";
    $massa = trim(fgets(STDIN));
    echo "Digite sua altura, com ponto: ";
    $altura = trim(fgets(STDIN));

    function calculaImc(float $massa, float $altura): string {
        $imc = $massa / ($altura ** 2);
        if ($imc <= 18.5) {
            return "Seu IMC é $imc, você está abaixo do normal.";
        } elseif ($imc <= 24.9) {
            return "Seu IMC é $imc, você está normal.";
        } elseif ($imc <= 29.9) {
            return "Seu IMC é $imc, você está com sobrepeso";
        } elseif ($imc <= 34.9) {
            return "Seu IMC é $imc, você está com obesidade grau I";
        } elseif ($imc <= 39.9) {
            return "Seu IMC é $imc, você está com obesidade grau II";
        } elseif ($imc == 40) {
            return "Seu IMC é $imc, você está com obesidade grau III";
        } elseif ($imc > 40) {
            return "Seu IMC é $imc, você precisa de ajuda urgente.";
        } else {
            return "IMC inválido, tente novamente.";
        }
    }
    echo calculaImc($massa, $altura);
?>

<?php
echo "\n . Converte Temperatura.\nDigite a temperatura em Celsius a ser convertida em Fahrenheit: ";
$temperatura = trim(fgets(STDIN));

function converteParaFahrenheit(float $temperatura): string {
    return ($temperatura * 1.8) + 32; // Pode se usar 9/5 no lugar de 1.8 também, mas reserva-se a cálculos mais complexos.
}
echo "A temperatura em Fahrenheit é: " . (converteParaFahrenheit($temperatura));
?>