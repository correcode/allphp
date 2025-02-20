<?php

$produto = ["nome" => "Notebook", "preco" => 3500, "estoque" => 5];

$chaves = array_keys($produto);

$valores = array_values($produto);

print_r($chaves); //Saida: Array ( [0]) => nome [1] => preco [2] => estoque )
print_r($valores); //Saida: Array ( [0] => notebook [1] => 3500 [2] => 5 )

?>
