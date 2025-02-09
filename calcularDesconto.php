<?php

function calcularDesconto($valorOriginal, $percentualDesconto) {
    $desconto = $valorOriginal * ($percentualDesconto / 100);
    return $valorOriginal - $desconto;
}

echo "Preco final: R$" . calcularDesconto(100, 30) . "\n"; //desconto 30%
echo "Preco final: R$" . calcularDesconto(250, 15) . "\n"; //desconto 15%

?>
