<?php
echo "Converter metros para centímetros.\nEscolha a quantia em metros que será convertida: ";
$qtdMetros = trim(fgets(STDIN));
$qtdCentimetros = $qtdMetros * 100;
echo "A quantidade em centimetros é: $qtdCentimetros";