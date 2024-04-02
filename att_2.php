<?php
function Divisão($numero) {
    echo "Divisão numero\n";
    for ($i = 1; $i <= $numero; $i++) {
        if ($numero % $i ==0 ){
            echo "$i ";
        }
    }
}

function lei_tura() {
    while (true){
        $numero = readline("Escreve o numero inteiro: ");
        if(is_numeric($numero) && $numero > 0 && ctype_digit ($numero)){
            return (int)$numero;            
        } else {
            echo "Numero não inteiro";
        }
    }    
}

$numero = lei_tura();
Divisão($numero);


