<?php

function calcularMedia($nota1, $nota2, $nota3){
    $media = ($nota1 + $nota2 + $nota3) / 3;
    return $media;
}

//usando a function

echo "A media é: " . calcularMedia(7, 8.5, 9);

?>
