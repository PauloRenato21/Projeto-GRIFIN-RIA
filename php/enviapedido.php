<?php
    include_once "conexao.php";

    $nome = $_POST['nomecompleto'];
    $data = $_POST['data'];
    $bolo = $_POST['nomebolo'];
    $email = $_POST['email'];
    $endereco = $_POST['endereco'];
    $telefone = $_POST['telefone'];
    $cpf = $_POST['cpf'];
    $pagamento = $_POST['pg'];

    echo $nome;
    echo "<br>";
    echo $data;
    echo "<br>";
    echo $bolo;
    echo "<br>";
    echo $email;
    echo "<br>";
    echo $endereco;
    echo "<br>";
    echo $telefone;
    echo "<br>";
    echo $cpf;
    echo "<br>";
    echo $pagamento;


?>