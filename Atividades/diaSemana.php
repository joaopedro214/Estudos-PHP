<?php
echo "Escreva um número de 1 a 10 para descobrir o dia da semana: ";
$dia = trim(fgets(STDIN));
switch ($dia) {
    case "1":
        echo "Hoje é segunda-feira.";
        break;
    case "2":
        echo "Hoje é terça-feira.";
        break;
    case "3":
        echo "Hoje é quarta-feira.";
        break;
    case "4":
        echo "Hoje é quinta-feira.";
        break;
    case "5":
        echo "Hoje é sexta-feira.";
        break;
    case "6":
        echo "Hoje é sábado.";
        break;
    case "7":
        echo "Hoje é domingo.";
        break;
    default:
        echo "Dia inválido.";
}
