<?php 

const PI = 3.14159;

echo "Qual seu nome?";
$nome = trim(fgets(STDIN));

echo "Qual sua idade ?";
$idade = trim(fgets(STDIN));

echo "Qual sua altura";
$altura = trim(fgets(STDIN));

  echo "Meu nome é $nome, tenho $idade de idade, e minha altura é $altura\n";
  echo "O valor de PI é:" . PI;

?>