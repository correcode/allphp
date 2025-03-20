<?php

$nota = "Eu adoro programar em PHP!\n";

echo  "A string tem " . strlen($nota)  . " " . "caracteres\n";

$findme = "PHP";
$pos = strpos($nota, $findme);

echo "A palavra". " " . $findme . " " . "foi encontrada na posicao". " " . $pos . "\n";

$maiuscula = strtoupper($nota);
$minuscula = strtolower($nota);

echo $maiuscula;
echo $minuscula;

?>
