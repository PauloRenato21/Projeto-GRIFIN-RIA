<?php
    include_once "conexao.php";

    
    session_start();
    $valido = true;
    $campos = Array("data","nomebolo","pg");
    foreach ($campos as $campo){
        if (empty($_POST[$campo])){
            $valido = false;
            $_SESSION['erro_pedido'] = true;
            header('location:../form_pedido.php');
        }
    }       

    if ($valido){
        $data = $_POST['data'];
        $bolo = $_POST['nomebolo'];
        $pagamento = $_POST['pg']; 
        $sql = 'insert into pedido(nome_bolo, forma_pagamento, data_pedido) values("'.$bolo.'", "'.$pagamento.'", "'.$data.'")';
        $con -> exec($sql);
        $_SESSION['erro_pedido'] = false;
        header('location:../form_pedido.php');
    }
    session_write_close();
?>