<?php
$soma = 0;
$contador = 0;

$numero = int(input("Escreva um número inteiro (negativo para terminar): "));

while ($numero >= 0)
    $soma += $numero;
    $contador += 1;
    $numero = int(input("Escreva um número inteiro (negativo para terminar): "));

if ($contador > 0) {
    $media = $soma / $contador
    print("A média dos valores positivos é:" $media);
}else{
    print("Nenhum número positivo foi colocado.");
    }

?>
