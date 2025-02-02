<?php

echo "Digite seu peso e altura!\n";

$peso = trim(fgets(STDIN));
$altura = trim(fgets(STDIN));

$imc = $peso / ($altura * $altura);

if ($peso <= 18.5){
    echo "Peso normal!\n";
} elseif ($peso > 18.5 || $peso <24.9){
    echo "Sobrepeso!\n";
} elseif ($peso >= 30){
    echo "Obesidade!\n";
} else {
    "Peso nao identificado!\n";
}

?>
