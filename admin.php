<?php

session_start();
if(isset($_SESSION['erro_admin'])){
    if($_SESSION['erro_admin']){
        $erro = "ERRO:Senha ou usuário inválidos!!";   
    } 
    else {
        $erro = "";
    }
    unset($_SESSION['erro_admin']);
}
else {
    $erro = "";
}
session_write_close();  
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="Css/StyleIndex.css"/>
    <link rel="stylesheet" type="text/css" href="Css/admin.css"/>
    <link rel="shortcut icon" href="Imagens/Top_Bolos.png" type="image/png"/>
    <link href="https://fonts.googleapis.com/css2?family=Eczar:wght@600&display=swap" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand&display=swap" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css2?family=Domine:wght@700&display=swap" rel="stylesheet"/>

    <title>Top Bolos | Login Fornecedor</title>
</head>
<body>
    <main class="container">
        <h2>Login</h2>
        <h3><?=$erro?></h3><br>
        <form action="php/buscaadmin.php" method="POST">
            <div class="input-field">
                <input type="text" name="username" id="username"
                    placeholder="Digite seu Usuario">
                <div class="underline"></div>
            </div>
            <div class="input-field">
                <input type="password" name="password" id="password"
                    placeholder="Digite sua Senha">
                <div class="underline"></div>
            </div>

            <input type="submit" value="Login">
        </form>

        
    </main>
</body>