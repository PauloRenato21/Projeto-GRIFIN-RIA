<?php
    include_once "conexao.php";

    
    
    $valido = true;
    $campos = Array("data","nomebolo","pg");
    foreach ($campos as $campo){
        if (empty($_POST[$campo])){
            $valido = false;
            header('location:../form_pedido.php?erro_pedido=1');
        }
    }       

    if ($valido){
        $data = $_POST['data'];
        $bolo = $_POST['nomebolo'];
        $pagamento = $_POST['pg']; 
        $sql = 'insert into pedido(nome_bolo, forma_pagamento, data_pedido) values("'.$bolo.'", "'.$pagamento.'", "'.$data.'")';
        $con -> exec($sql);
        header('location:../form_pedido.php?erro_pedido=2')
    }

?>