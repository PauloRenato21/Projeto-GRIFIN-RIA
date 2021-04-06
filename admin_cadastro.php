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
    <title>Top Bolos | Cadastro Cliente</title>
</head>
<body>
    <main class="container">
        <form action="" method="POST">

            <h2>Cadastro Produto</h2>
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