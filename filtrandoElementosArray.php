<?php

$notas = [5, 8.5, 9, 6, 7.5];

$notasAltas = array_filter($notas, function($nota){
    return $nota >= 8;
});

print_r($notasAltas);

?>
