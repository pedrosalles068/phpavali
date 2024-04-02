<?php
function tabuada($numero) {
    echo "Tabuda de numero\n";
    for ($i = 1; $i <=10;$i++) {
        $result = ($numero * $i);
        //print_r($numero);
        echo "{$numero} x {$i} = {$result}".PHP_EOL;
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
tabuada($numero);
