<?php
if(isset($_GET['erro_pedido'])){
    $campo_erro = $_GET['erro_pedido'];
    $erro = "ERRO:Algum campo está em branco!";
}
else{
    $erro = "";
}

// if(isset($_GET['redirect'])){
//     $redireciona = $_GET['redirect'];
// }else{
//     $redireciona = '/redtulip/index.php';
// }

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="Css/admin.css"/>
    <title>Formulario Pedido</title>
</head>
<body>

    <main class="container">

        <h2>Pedido:</h2>
        <h3><?=$erro?></h3><br>
        <form action="php/enviapedido.php" method="POST">

            <div class="input-field">
                <input type="text" name="nomebolo" id="nomebolo"
                    placeholder="Digite o Nome do Bolo">
                <div class="underline"></div>
            </div>
            <br>

            <div class="input-field">
                <input type="date" name="data" id="data">
                <div class="underline"></div>
            </div>
            <br>
            <br>
            
            <div class="input-field">
                <label for="pg" id="alinhamentopg">Forma Pagamento: </label>
                <select id="pg" name="pg">
                    <option selected disabled value="">--Selecione--</option>
                    <option value="credito">Cartão de Credito</option>
                    <option value="debito">Cartão de Debito</option>
                    <option value="transferencia">Transferencia Bancaria</option>
                    <option value="boleto">Boleto Bancario</option>
                    <option value="Avista">Dinheiro</option>                                               
                </select>
            </div>
            <br>

            <input type="submit" value="Enviar">

        </form>
    </main>
</body>
</html>