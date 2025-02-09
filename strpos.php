<?php

$frase = "Aprender PHP é divertido!";
$posicao = strpos($frase, "PHP");

if ($posicao !== false){
    echo "A palavra 'PHP' comeca na posicao: $posicao \n";
} else {
    echo "Palavra nao encontrada\n";
}

?>
