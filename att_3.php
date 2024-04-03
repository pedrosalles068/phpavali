<?php
$soma = 0;
$cont = 0;

echo "Escreva um número int negativo: ";
$num = intval(fgets(STDIN));

while ($num >= 0) {
    $soma += $num;
    $cont += 1;
    echo "Escreva um número int para acabar: ";
    $num = intval(fgets(STDIN));
}

if ($cont > 0) {
    $media = $soma / $cont;
    echo "A média é: $media";
} else {
    echo "Nenhum número foi colocado.";
}
?>

