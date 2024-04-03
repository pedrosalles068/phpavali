<?php
function vacaquefala($mensagem) {
    $vaca = "
     ________________________________________
    /                                         \
     $mensagem        
    \                                         /
     ----------------------------------------
        \   ^__^
         \  (oo)\_______
            (__)\       )\/\
                ||----w |
                ||     ||";
    echo "$vaca";
}

$mensagem = readline("Digite alguma coisa: ").PHP_EOL;

vacaquefala($mensagem);
