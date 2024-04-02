<?php
$soma = 0;
$contador = 0;

echo "Escreva um número inteiro (negativo para terminar): ";
$numero = intval(fgets(STDIN)); // A função input não existe em PHP, estamos usando fgets(STDIN) para ler do console

while ($numero >= 0) {
    $soma += $numero;
    $contador += 1;
    echo "Escreva um número inteiro (negativo para terminar): ";
    $numero = intval(fgets(STDIN));
}

if ($contador > 0) {
    $media = $soma / $contador;
    echo "A média dos valores positivos é: $media";
} else {
    echo "Nenhum número positivo foi colocado.";
}
?>

