<?php
echo "Converte Temperatura.\nDigite a temperatura a ser convertida: ";
$temperatura = trim(fgets(STDIN));
function converteParaFahrenheit($temperatura) {
    return ($temperatura * 1.8) + 32; // Pode se usar 9/5 no lugar de 1.8 também, mas reserva-se a cálculos mais complexos.
}
echo "A temperatura em Fahrenheit é: " . (converteParaFahrenheit($temperatura));