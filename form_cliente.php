<?php
    session_start();

    if(isset($_SESSION['erro_cadastro'])){
        if($_SESSION['erro_cadastro']){
            $erro = "ERRO:Algum campo esta invalido ou em branco!!";   
        } 
        else {
            $erro = "Cadastro feito com sucesso!";
        }
        unset($_SESSION['erro_cadastro']);
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
    <link rel="shortcut icon" href="Imagens/Top_Bolos.png" type="image/png"/>
    <link rel="stylesheet" href="Css/login.css"/>
    <title>Top Bolos | Cadastro Cliente</title>
</head>
<body>   

    <main class="container">

        <h2>Cadastro</h2>
        <h3><?=$erro?></h3>
        <br>
        <form action="php/login.php" method="POST">

            <div class="input-field">
                <input type="text" name="nomecompleto" id="nomecompleto"
                    placeholder="Digite seu Nome">
                <div class="underline"></div>
            </div>

            <div class="input-field">
                <input type="text" name="login" id="login"
                    placeholder="Digite seu Login">
                <div class="underline"></div>
            </div>
            <br>
            
            <div class="input-field">
                <input type="password" name="senha" id="losenhagin"
                    placeholder="Digite sua Senha">
                <div class="underline"></div>
            </div>
            <br>

            <div class="input-field">
                <input type="text" name="cpf" id="cpf"
                    placeholder="Digite seu CPF">
                <div class="underline"></div>
            </div>
            <br>

            <div class="input-field">
                <input type="email" name="email" id="email"
                    placeholder="Digite seu E-mail">
                <div class="underline"></div>
            </div>
            <br>

            <div class="input-field">
                <input type="text" name="endereco" id="endereco"
                    placeholder="Digite seu Endereço">
                <div class="underline"></div>
            </div>
            <br>

            <div class="input-field">
                <input type="text" name="telefone" id="telefone"
                    placeholder="Digite seu Telefone">
                <div class="underline"></div>
            </div>
            <br>

            <input type="submit" value="Cadastrar">

        </form>
    </main>
</body>    
</html>