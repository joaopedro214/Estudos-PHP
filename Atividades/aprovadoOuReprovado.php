<?php

$notas = [4, 6, 7, 3, 5, 9, 10, 8];

foreach ($notas as $nota){
    $resultado = $nota > 6 ? "aprovado" : "reprovado";

    echo "Essa(a) aluno(a) foi $resultado com a nota $nota \n";
}
