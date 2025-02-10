<?php

echo "Digite seu nome completo!\n";

$nome = trim(fgets(STDIN));

$minusculas = strtolower($nome);

$primeiraMaiuscula = ucwords($nome);

$novaFrase = str_replace(" ", "-", $primeiraMaiuscula);

echo $novaFrase;

?>
