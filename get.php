<?php

if (isset($_GET["nome"])) {
    echo "Ola, " . htmlspecialchars($_GET["nome"]) . "!";
} else {
    echo "Nenhum nome foi enviado.\n";
}

?>
