<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = trim($_POST["nome"]);

    if (!empty($nome)) {
        echo "Nome recebido: " . htmlspecialchars($nome);
    } else {
        echo "Por favor, preencha o nome!";
    }
}

?>
