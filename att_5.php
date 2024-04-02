<?php
$numeroAleatorio = rand(1, 100);
echo "Adivinhe o número entre 1 a 100!\n";

while (true) {
    $acertar = readline("Digite o número:\n ");
    if (!is_numeric($acertar)) {
        echo "Número incorreto, digite outro:\n";
        continue;
    }
    $acertar = (int)$acertar;
    if ($acertar < $numeroAleatorio) {
        echo "Dica: Seu número é maior!\n";
    } elseif ($acertar > $numeroAleatorio) {
        echo "Dica: Seu número é menor!\n";
    } else {
        echo "Billll!!, Acertou o número\n";
        break;
    }
}
?>
