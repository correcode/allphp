<?php

echo "Qual seu nome ?\n";

$nome = trim(fgets(STDIN));

function saudacaoPersonalizada ($nome){
    echo "Ola $nome! seja bem-vindo!\n";
}

saudacaoPersonalizada ($nome);

?>
