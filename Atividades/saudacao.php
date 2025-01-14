<?php

echo "Por favor considere 24h, insira um horário inteiro. Ex: 7,15...\nQue horas são agora? ";
$hora = trim(fgets(STDIN));

if ($hora >= 1 && $hora <= 12) {
    echo "Bom diaa!";
}elseif ($hora > 12 && $hora <= 18) {
    echo "Boa tardee!";       
}elseif ($hora > 18 && $hora <= 24) {
    echo "Boa noitee!";
}else {
    echo "Horário desconhecido";
}