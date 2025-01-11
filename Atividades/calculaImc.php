<?php

echo "IMC\nDigite sua massa: ";
$massa = trim(fgets(STDIN));

echo "Digite sua altura, com ponto: ";
$altura = trim(fgets(STDIN));

$imc = $massa / ($altura ** 2);

if ($imc <= 18.5) {
    echo "Seu IMC é $imc, você está abaixo do normal.";
} elseif ($imc <= 24.9) {
    echo "Seu IMC é $imc, você está normal.";
} elseif ($imc <= 29.9) {
    echo "Seu IMC é $imc, você está com sobrepeso";
} elseif ($imc <= 34.9) {
    echo "Seu IMC é $imc, você está com obesidade grau I";
} elseif ($imc <= 39.9) {
    echo "Seu IMC é $imc, você está com obesidade grau II";
} elseif ($imc = 40) {
    echo "Seu IMC é $imc, você está com obesidade grau III";
} elseif ($imc > 40) {
    echo "Seu IMC é $imc, você precisa de ajuda urgente.";
} else {
    echo "IMC inválido, tente novamente.";
}