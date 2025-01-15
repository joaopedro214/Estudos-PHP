<?php

function incrementaPorReferencia(&$valor) {
    $valor++;
}
$numero = 5;
echo "Antes de incrementar: $numero\n"; // Saída: 5

incrementaPorReferencia($numero);
echo "Depois de incrementar: $numero\n"; // Saída: 6

incrementaPorReferencia($numero);
echo "Depois de incrementar: $numero\n";

incrementaPorReferencia($numero);
echo "Depois de incrementar: $numero\n";
