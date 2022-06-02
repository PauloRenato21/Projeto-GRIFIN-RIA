<?php

    include_once "conexao.php";

    $nome = $_POST['nomecompleto'];
    $login = $_POST['login'];
    $senha = $_POST['senha'];
    $email = $_POST['email'];
    $endereco = $_POST['endereco'];
    $telefone = $_POST['telefone'];
    $cpf = $_POST['cpf'];

    $sql = 'insert into cliente (nome, login, senha, cpf, email, endereco, telefone) values("'. $nome .' "," ' . $login . ' "," ' . $senha . ' "," ' .  $cpf . ' "," ' . $email . ' "," ' . $endereco . ' "," ' . $telefone . ' ")';

    $con->exec($sql);

?>