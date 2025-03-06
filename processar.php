<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $mensagem = $_POST["mensagem"];

    echo "Nome: $nome <br>";
    echo "Email: $email <br>";
    echo "Mensagem: $mensagem <br>";
} else {
    echo "Acesso invalido!";
}

?>
