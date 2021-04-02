<?php
    include_once "php/conexao.php";

    $sql = "select * from cliente c inner join pedido p on c.ID = p.FK_CLIENTE_ID";
    $res = $con->query($sql);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link rel="stylesheet" type="text/css" href="Css/StyleIndex.css"/>
    <link rel="stylesheet" type="text/css" href="Css/pedidos.css"/>
    <link rel="shortcut icon" href="Imagens/Top_Bolos.png" type="image/png"/>
    <link href="https://fonts.googleapis.com/css2?family=Eczar:wght@600&display=swap" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand&display=swap" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css2?family=Domine:wght@700&display=swap" rel="stylesheet"/>
    <title>Top Bolos | Pedidos</title>
</head>
<body>
    <br/>
        
    <!--Logo-->
    <header>
        <div class="logo">
            <a href="index.php"><img src="Imagens/Top_Bolos.png" alt="Top Bolos" title="Top Bolos"/></a>
        </div>
    </header>

    <div id="main">

        <h1>Pedidos</h1>

        <div class="pedidos">
                <?php
                    if($res->rowCount()):
                        foreach($res as $count):
                ?>
                    <div>   
                        <h3><?=$count['nome']?></h3>
                        <p>Telefone: <?=$count['telefone']?></p>
                        <p>Email: <?=$count['email']?></p>
                        <p>Endereço: <?=$count['endereco']?></p>
                        <p>CPF: <?=$count['cpf']?></p>
                        <p>Nome do Bolo: <?=$count['NOME_BOLO']?></p>
                        <p>Forma de Pagemento: <?=$count['FORMA_PAGAMENTO']?></p>
                        <p>Data do Pedido: <?= date('d/m/Y',strtotime($count['DATA_PEDIDO'])) ?></p>
                    </div>
                <?php
                        endforeach;
                    else:
                ?>
                    <div id="vazio">
                        <p>Nenhum pedido realizado !!!</p>
                    </div>
                <?php
                    endif;
                ?>
        </div>

    </div>


    <!--Rodapé-->
    <footer>
        <p>@2020 - Top Bolos®</p>
    </footer>
</body>
</html>