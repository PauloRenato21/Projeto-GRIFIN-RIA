<?php
    session_start();
    if(isset($_SESSION['erro_login_cliente'])){
        if(!$_SESSION['erro_login_cliente']){
            $erro = "";   
        } 
        else {
            $erro = "ERRO:Senha ou usuario inválidos!";
        }
        unset($_SESSION['erro_login_cliente']);
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
    <link rel="stylesheet" type="text/css" href="Css/login.css"/>
    <link rel="shortcut icon" href="Imagens/Top_Bolos.png" type="image/png"/>
    <link href="https://fonts.googleapis.com/css2?family=Eczar:wght@600&display=swap" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand&display=swap" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css2?family=Domine:wght@700&display=swap" rel="stylesheet"/>
    <title>Top Bolos | Login Cliente</title>
</head>
<body>
    <main class="container">
        <h2>Login</h2>
        <h3><?=$erro?></h3><br>
        <form action="php/busca_cliente.php" method="post">
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
</html>