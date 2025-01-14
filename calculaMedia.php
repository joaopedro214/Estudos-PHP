<?php
echo "Jogo da média.\nDigite o número 1: ";
$num1 = trim(fgets(STDIN));

echo "Digite o número 2: ";
$num2 = trim(fgets(STDIN));

echo "Digite o número 3: ";
$num3 = trim(fgets(STDIN));

$media = ($num1 + $num2 + $num3)/3;

echo "A média dos números que digitou é: $media.";