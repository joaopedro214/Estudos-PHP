<?php
function anoBissexto($ano) {
  return ($ano % 4 == 0 && $ano % 100 != 0) || ($ano % 400 == 0);  
}
echo "Ano Bissexto ou não?\nDigite o ano: ";
$ano = trim(fgets(STDIN));
if(anoBissexto($ano)) {
    echo "O ano $ano é bissexto.";
}else {
    echo "O ano $ano não é bissexto";
}