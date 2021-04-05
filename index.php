<?php
session_start();

	if(!isset($_SESSION['login_cliente'])){
		$_SESSION['login_cliente'] = false;
	}

session_write_close();
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>

        <!-- POP-UP -->
        <script type="text/javascript" src="pop-up/js/bioep.min.js"></script>
    
        <script type="text/javascript">
          bioEp.init({
            html: '<div id="bio_ep_content">' +
            '<img src="Imagens/seta.png" width="50" alt="Participe" style="margin-right: 150px;" />' +
            '<span></span>' +
            '<span></span>' +
            '<span></span>' +
            '<a href="form_cliente.php" class="bio_btn">Participar da Promoção &nbsp;</a>' +
            '</div>',
            css: '#bio_ep {width: 400px; height: 400px; color: #333; background-color: #fcb3be; text-align: center;background-image: url(Imagens/oport.png);background-size: cover;}' +
            '#bio_ep_content {padding: 255px 0 0 0; font-family: inherit;}' +
            '#bio_ep_content span:nth-child(2) {display: block; color: #f21b1b; font-size: 32px; font-weight: 600;}' +
            '#bio_ep_content span:nth-child(3) {display: block; font-size: 16px;}' +
            '#bio_ep_content span:nth-child(4) {display: block; margin: -5px 0 0 0; font-size: 16px; font-weight: 600;}' +
            '.bio_btn {display: inline-block; margin: 18px 0 0 0; padding: 8px 25px 8px 25px; color: black; font-size: 19px; font-weight: 900; background-color: #fcb3be; border: 1px solid #FFFFFF; cursor: pointer; -webkit-appearance: none; -moz-appearance: none; border-radius: 100px; text-decoration: none;}'+
            'a.bio_btn:hover{text-decoration:none;color:rgb(250, 88, 115);}',
            cookieExp: 0,
            showOnDelay: true,
            delay: 5
    
        });
        </script>

        <meta charset="UTF-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <link rel="stylesheet" type="text/css" href="bootstrap-4.5.3-dist/css/bootstrap.css"/>
        <link rel="stylesheet" type="text/css" href="Css/StyleIndex.css"/>
        <link rel="shortcut icon" href="Imagens/Top_Bolos.png" type="image/png"/>
        <link href="https://fonts.googleapis.com/css2?family=Eczar:wght@600&display=swap" rel="stylesheet"/>
        <link href="https://fonts.googleapis.com/css2?family=Quicksand&display=swap" rel="stylesheet"/>
        <link href="https://fonts.googleapis.com/css2?family=Domine:wght@700&display=swap" rel="stylesheet"/>

        <title>Top Bolos | Home</title>
    </head>
    <body>

        <br/>
        
        <!--Logo-->
        <header>
            <div class="logo">
                <a href="index.php"><img src="Imagens/Top_Bolos.png" alt="Top Bolos" title="Top Bolos"/></a>
            </div>
            <div class="login">
                <img src="Imagens/icone-Top_Bolos.png" alt="Top Bolos Cesta" title="Comprar"/>
                <?php 
                    if($_SESSION['login_cliente']):
                ?>
                <button><a href="php/logout_cliente.php">Sair</a></button>
                <?php
                    else:

                ?>

                <a href="login_cliente.php"><button>Login</button></a>
                <?php

                    endif;
                ?>
            </div>  
        </header>

        <br/>

        <!--Menu-->
        <nav>
            <table>
                <tr>
                    <td>
                        <a href="index.php">Home</a>
                    </td>
                    <td>
                        <a href="#bolos">Bolos</a>
                    </td>
                    <td>
                        <a href="#tortas">Tortas</a>
                    </td>
                    <td>
                        <a href="#doces">Doces</a>
                    </td>
                </tr>
            </table>
        </nav>

        <br/>
        <br/>

        <!--Carrosel no Boodstrap-->
        <nav>
            <div class="carousel slide" id="carrosel" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <h2>Bolo Oreo</h2>
                        <img src="Imagens/Carrosel/bolo-oreo.png" alt="Top Bolos" title="Bolo Oreo Top Bolos" data-toggle="modal" data-target="#primeiroModal"/>

                        <!-- Primeiro Modal Carrosel-->
                        <div class="modal fade" id="primeiroModal" role="dialog">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">

                                    <div class="modal-header">
                                        <h3>Bolo Oreo</h3>
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    </div>

                                    <div class="modal-body">
                                        <img src="Imagens/Carrosel/bolo-oreo.png" alt="Top Bolos" title="Bolo Oreo Top Bolos"/>
                                        <p class="preco-modal">R$: 20,00</p>
                                        <button><a href="form_pedido.php">Comprar</a></button>
                                    </div>

                                </div>
                            </div>
                        </div>

                    </div>    
                    <div class="carousel-item">
                        <h2>Cupcake Tart queques</h2>
                        <img src="Imagens/Carrosel/cupcake.png" alt="Top Bolos" title="Cupcake Top Bolos" data-toggle="modal" data-target="#segundoModal"/>

                        <!-- Segundo Modal Carrosel-->
                        <div class="modal fade" id="segundoModal" role="dialog">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">

                                    <div class="modal-header">
                                        <h3>Cupcake Tart queques</h3>
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    </div>

                                    <div class="modal-body">
                                        <img src="Imagens/Carrosel/cupcake.png" alt="Top Bolos" title="Cupcake Top Bolos"/>
                                        <p class="preco-modal">R$: 20,00</p>
                                        <button><a href="form_pedido.php">Comprar</a></button>
                                    </div>

                                </div>
                            </div>
                        </div>

                    </div>
        
                    <div class="carousel-item">
                        <h2>Torta Floresta Negra</h2>
                        <img src="Imagens/Carrosel/torta.png" alt="Top Bolos" title="Torta Top Bolos" data-toggle="modal" data-target="#terceiroModal"/>

                        <!-- Terceiro Modal Carrosel-->
                        <div class="modal fade" id="terceiroModal" role="dialog">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">

                                    <div class="modal-header">
                                        <h3>Torta Floresta Negra</h3>
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    </div>

                                    <div class="modal-body">
                                        <img src="Imagens/Carrosel/torta.png" alt="Top Bolos" title="Torta Floresta Negra"/>
                                        <p class="preco-modal">R$: 20,00</p>
                                        <button><a href="form_pedido.php">Comprar</a></button>
                                    </div>

                                </div>
                            </div>
                        </div>

                    </div>
        
                    <div class="carousel-item">
                        <h2>Trufas Gourmet</h2>
                        <img src="Imagens/Carrosel/trufas.png" alt="Top Bolos" title="Trufa Top Bolos" data-toggle="modal" data-target="#quartoModal"/>

                        <!-- Quarto Modal Carrosel-->
                        <div class="modal fade" id="quartoModal" role="dialog">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">

                                    <div class="modal-header">
                                        <h3>Trufas Gourmet</h3>
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    </div>

                                    <div class="modal-body">
                                        <img src="Imagens/Carrosel/trufas.png" alt="Top Bolos" title="Trufas Gourmet"/>
                                        <p class="preco-modal">R$: 20,00</p>
                                        <button><a href="form_pedido.php">Comprar</a></button>
                                    </div>

                                </div>
                            </div>
                        </div>
                        
                    </div>
                    
                    <a href="#carrosel" class="carousel-control-prev" data-slide="prev">
                        <img src="Imagens/Carrosel/seta_esquerda.png" alt="Seta para esquerda" title="Voltar"/>
                    </a>
        
                    <a href="#carrosel" class="carousel-control-next" data-slide="next">
                        <img src="Imagens/Carrosel/seta_direita.png" alt="Seta para direita" title="Avançar"/>
                    </a>
                </div>
            </div>
        </nav>

        <br/>

        <!--Menu Lateral-->
        <aside id="menuLateral">
            <br/>
            <br/>
            <p><strong>Contatos</strong></p>
            <br/>
            <br/>
            <a href="https://web.whatsapp.com/" target="_blank"><img src="Imagens/Menu_Lateral/whatsapp.png" alt="Icone Whatsapp" title="Whatsapp"/></a>
            <br/>
            <br/>
            <a href="https://www.facebook.com/" target="_blank"><img src="Imagens/Menu_Lateral/facebook.png" alt="Icone Facebook" title="Facebook"/></a>
            <br/>
            <br/>
            <a href="https://twitter.com/" target="_blank"><img src="Imagens/Menu_Lateral/twitter.png" alt="Icone Twitter" title="Twitter"/></a>
            <br/>
            <br/>
            <br/>
            <p><strong>(11) 4002-8922</strong></p>
        </aside>

        <br/>
        <br/>

        <!--Promoções Bolos-->
        <section id="bolos">
            
            <h3>Promoções Bolos </h3>
            <br/>
            <!--Bolo com Morango-->
            <div class="quadro1">
                <div class="nome">
                    <p>Bolo com Morango</p>
                </div>
                <img src="Imagens/Promocoes_Bolos/Bolo-Cobertuta.png" alt="Bolos Top Bolos" title="Bolo Cobertura Morango"/>
                <p class="preco">R$: 20,00</p>
                <a href="form_pedido.php"><button>Comprar</button></a>  
            </div>
            <!--Bolo Surpresa Kit Kat-->
            <div class="quadro2">
                <div class="nome">
                    <p>Bolo Surpresa Kit Kat</p>
                </div>
                <img src="Imagens/Promocoes_Bolos/Bolo-Surpresa.png" alt="Bolos Top Bolos" title="Bolo Surpresa"/>
                <p class="preco">R$: 20,00</p>
                <a href="form_pedido.php"><button>Comprar</button></a>             
            </div>
            <!--Bolo de Aniversário-->
            <div class="quadro3">
                <div class="nome">
                    <p>Bolo de Aniversário</p>
                </div>     
                <img src="Imagens/Promocoes_Bolos/Bolo-Aniver.png" alt="Bolos Top Bolos" title="Bolo Aniversário"/>
                <p class="preco">R$: 20,00</p>
                <a href="form_pedido.php"><button>Comprar</button></a>                                  
            </div>
            <!--Bolo Kit Kat de Brigadeiro-->
            <div class="quadro4">
                <div class="nome">
                    <p>Bolo Kit Kat de Brigadeiro</p>
                </div>    
                <img src="Imagens/Promocoes_Bolos/Bolo-KitKat.png" alt="Bolos Top Bolos" title="Bolo Kit Kat Brigadeiro"/>
                <p class="preco">R$: 20,00</p>
                <a href="form_pedido.php"><button>Comprar</button></a>                 
            </div>

        </section> 

        <br/>
        <br/>
        <br/>

        <!--Promoções Tortas-->
        <section id="tortas">

            <h3>Promoções Tortas</h3>
            <br/>
            <!--Torta de Chocolate-->
            <div class="quadro1">
                <div class="nome">
                    <p>Torta de Chocolate</p>
                </div>       
                <img src="Imagens/Promocoes_Tortas/Torta-Choco.png" alt="Tortas Top Bolos" title="Torta Chocolate"/>
                <p class="preco">R$: 20,00</p>
                <a href="form_pedido.php"><button>Comprar</button></a>             
            </div>
            <!--Torta de Cereja-->
            <div class="quadro2">
                <div class="nome">
                    <p>Torta de Cereja</p>
                </div>
                <img src="Imagens/Promocoes_Tortas/Torta-Cereja.png" alt="Tortas Top Bolos" title="Torta Cereja"/>
                <p class="preco">R$: 20,00</p>
                <a href="form_pedido.php"><button>Comprar</button></a>    
            </div>
            <!--Torta de Amêndoa-->
            <div class="quadro3">
                <div class="nome">
                    <p>Torta de Amêndoa</p>
                </div>
                <img src="Imagens/Promocoes_Tortas/Torta-Amendoa.png" alt="Tortas Top Bolos" title="Torta Amêndoa"/>
                <p class="preco">R$: 20,00</p>
                <a href="form_pedido.php"><button>Comprar</button></a>  
            </div>
            <!--Torta com Glacê-->
            <div class="quadro4">
                <div class="nome">
                    <p>Torta com Glacê</p>
                </div>
                <img src="Imagens/Promocoes_Tortas/Torta-Glace.png" alt="Tortas Top Bolos" title="Torta Glacê"/>
                <p class="preco">R$: 20,00</p>
                <a href="form_pedido.php"><button>Comprar</button></a>
            </div>

        </section>

        <br/>
        <br/>
        <br/>

        <!--Promoções Doces-->
        <section id="doces">

            <h3>Promoções Doces</h3>
            <br/>
            <!--Donuts com cobertura Morango-->
            <div class="quadro1">
                <div class="nome">
                    <p>Donuts com cobertura Morango</p>
                </div>
                <img src="Imagens/Promocoes_Doces/Donuts.png" alt="Donuts Top Bolos" title="Donuts Morango"/>
                <p class="preco">R$: 20,00</p>
                <a href="form_pedido.php"><button>Comprar</button></a>   
            </div>

            </div>
            <!--Muffins pedaços Chocolate-->
            <div class="quadro2">
                <div class="nome">
                    <p>Muffins pedaços Chocolate</p>
                </div>
                <img src="Imagens/Promocoes_Doces/Muffins.png" alt="Muffins Top Bolos" title="Muffins pedaços Chocolate"/>
                <p class="preco">R$: 20,00</p>
                <a href="form_pedido.php"><button>Comprar</button></a>                     
            </div>

            </div>
            <!--Pudim Leite Condensado-->
            <div class="quadro3">
                <div class="nome">
                    <p>Pudim Leite Condensado</p>
                </div>   
                <img src="Imagens/Promocoes_Doces/Pudim.png" alt="Pudim Top Bolos" title="Pudim"/>
                <p class="preco">R$: 20,00</p>
                <a href="form_pedido.php"><button>Comprar</button></a>    
            </div>
            </div>
            <!--Hambúrguer de Siri Colorido-->
            <div class="quadro4">
                <div class="nome">
                    <p>Hambúrguer de Siri Colorido</p>
                </div>  
                <img src="Imagens/Promocoes_Doces/Burguer-Siri.png " alt="Hambúrguer de Siri Top Bolos" title="Hambúrguer de Siri"/>
                <p class="preco">R$: 20,00</p>
                <a href="form_pedido.php"><button>Comprar</button></a>                                  
            </div>
            </div>
        </section>

        <br/>
        <br/>
        <br/>

        <!--Rodapé-->
        <footer>
            <p>@2020 - Top Bolos®</p>
        </footer>

        <!-- Responsável pela movimentação e efeitos do Carrosel  -->
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    </body>
</html>
        