<?php

function bubbleSort($numero)
{
    $n = count($numero);
    $trocou = true;
    while ($trocou) {
        $trocou = false;
        for ($i = 0; $i < $n - 1; $i++) {
            if ($numero[$i] > $numero[$i + 1]) {
                // Troca de posições
                $tempo = $numero[$i];
                $numero[$i] = $numero[$i + 1];
                $numero[$i + 1] = $tempo;
                $trocou = true;
            }
        }}
    return $numero;
}

$numero = [64, 34, 25, 12, 22, 11, 90];

echo "Array original: ";
print_r($numero);

echo "Array ordenado com Bubble Sort: ";
$sortedArray = bubbleSort($numero);

?>