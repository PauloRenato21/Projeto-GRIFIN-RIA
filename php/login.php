<?php

    include_once "conexao.php";
    session_start();

    $valido = true;
    $pedidos = Array("nomecompleto","login","senha","email","endereco","telefone","cpf");
    foreach ($pedidos as $campo){
        if (empty($_POST[$campo])){
            $valido = false;
            $_SESSION['erro_cadastro'] = true;
            header('location:../form_cliente.php');
        }
    }       

    if($valido){
        $nome = $_POST['nomecompleto'];
        $login = $_POST['login'];
        $senha = $_POST['senha'];
        $email = $_POST['email'];
        $endereco = $_POST['endereco'];
        $telefone = $_POST['telefone'];
        $cpf = $_POST['cpf'];

        $sql = 'insert into cliente (nome, login, senha, cpf, email, endereco, telefone) values("'. $nome .' "," ' . $login . ' "," ' . $senha . ' "," ' .  $cpf . ' "," ' . $email . ' "," ' . $endereco . ' "," ' . $telefone . ' ")';

        $con->exec($sql);

        $_SESSION['erro_cadastro'] = false;
        header('location:../form_cliente.php');
    }
    
    session_write_close();

?>