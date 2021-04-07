<?php
    session_start();

    if(isset($_SESSION['produto'])){
        if($_SESSION['produto']){
            $erro = "ERRO:Informações inválidas!";   
        } 
        else {
            $erro = "Cadastro do produto feito com sucesso!";
        }
        unset($_SESSION['produto']);
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
    <link rel="stylesheet" type="text/css" href="Css/login.css"/>
    <link rel="shortcut icon" href="Imagens/Top_Bolos.png" type="image/png"/>
    <title>Top Bolos | Cadastro Produto</title>
</head>
<body>
    <main class="container">
        <form action="php/adiciona_produto.php" method="POST" enctype="multipart/form-data">

            <h2>Cadastro Produto</h2>
            <h3><?=$erro?></h3>
            <br>
                <div class="input-field">
                    <input type="text" name="bolo" id="bolo"
                        placeholder="Nome do Bolo">
                    <div class="underline"></div>
                </div>
                <br>
                <div class="input-field">
                    <input type="text" name="preco" id="preco"
                        placeholder="Digite o Preço">
                    <div class="underline"></div>
                </div>
                <br>              
                <p>Selecione sua imagem: </p>
                <br>
                <input type="file" name="fileToUpload" id="fileToUpload">
                <input type="submit" value="Enviar" name="submit">
        </form>
    </main>
</body>
</html>