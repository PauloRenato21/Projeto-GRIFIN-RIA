<?php
    session_start();
    include_once "conexao.php";
    $login_cliente = $_POST['username'];
    $senha_cliente = $_POST['password'];
    $sql = "select * from cliente where login like '$login_cliente' and senha like '$senha_cliente'";
    $resultado = $con->query($sql);

    if ($resultado->rowCount()){
        $_SESSION['login_cliente'] = true;
        $_SESSION['erro_login_cliente'] = false;

        foreach($resultado as $count){
            $_SESSION['id'] = $count['ID'];
        }
        
        Header('Location: ../index.php');
    }
    else {
        $_SESSION['login_cliente'] = false;
        $_SESSION['erro_login_cliente'] = true;
        header('Location: ../login_cliente.php');
    }
    session_write_close();
?>