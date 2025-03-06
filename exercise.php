<?php
$produtos = [
        ["nome" => "Notebook", "preco" => 3500, "estoque" => 5],
            ["nome" => "Mouse", "preco" => 100, "estoque" => 0],
                ["nome" => "Teclado", "preco" => 200, "estoque" => 3]

];

// Filtrar produtos com estoque > 0
$disponiveis = array_filter($produtos, function($produto) {
     return $produto["estoque"] > 0;
     });

    // Aplicar desconto de 10% nos preços
     $comDesconto = array_map(function($produto) {
         $produto["preco"] *= 0.9; // 10% de desconto
             return $produto;
             }, $disponiveis);

            // Exibir produtos finalizados
             print_r($comDesconto);
             ?>
     })
 })
?>
