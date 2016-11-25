<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>.:: Loja de revistas ::.</title>
        <link rel="icon" href="">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="keywords" content="Revistas, compras, Leitura, Ler">
        <meta name="description" content="Site para venda de revistas">
        <link rel="stylesheet" href="css/estilo.css">
        <script src="js/jquery-3.1.1.min.js"></script>
    </head>
    <body>
        <table id="conteudo">
            <?php
            require_once './divTopo.php';
            ?>
            <tr> 
                <td style="vertical-align: top;">
                    <?php
                    require_once './menu.php';
                    ?>
                </td>
                <td colspan="2">
                    <table id="conteudoCont" cellspacing="0" cellpadding="0">
                        <tr>
                            <td style="height: 25px;">
                                <div  id="conteudoTitulo">
                                    FINALIZAR COMPRA
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td style="vertical-align: top;">
                                <form action="finalizaCompraDao.php" method="post">
                                    <table width="100%" style="height:795px;" align="center">
                                        <tr>
                                            <td width="50%">
                                                <table class="compraTabela" id="compraTabela1">
                                                    <tr>
                                                        <td>
                                                            ENDEREÇO DE ENTREGA
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <input type="text" placeholder="Endereço" name="endereco" class="texto" required=""> 
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <input type="text" placeholder="CEP" name="cep" class="texto" required=""> 
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td style="border-top: 1px dotted rgb(112,173,71);">
                                                            INFORMAÇÕES DE PAGAMENTO
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <input type="text" placeholder="Número de cartão" name="numCartao" class="texto" required=""> 
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td style="font-size: 11pt;">
                                                            Validade: 
                                                            <select name="mes">
                                                                <option>--</option>
                                                                <option>01</option>
                                                                <option>02</option>
                                                                <option>03</option>
                                                                <option>04</option>
                                                                <option>05</option>
                                                                <option>06</option>
                                                                <option>07</option>
                                                                <option>08</option>
                                                                <option>09</option>
                                                                <option>10</option>
                                                                <option>11</option>
                                                                <option>12</option>
                                                            </select> 
                                                            / 
                                                            <select name="ano">
                                                                <option>----</option>
                                                                <option>2016</option>
                                                                <option>2017</option>
                                                                <option>2018</option>
                                                                <option>2019</option>
                                                                <option>2020</option>
                                                                <option>2021</option>
                                                                <option>2022</option>
                                                            </select>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td style="font-size: 11pt;">
                                                            Código de segurança:
                                                            <input type="text" name="codCartao" required="" size="3"> 
                                                        </td>
                                                    </tr>
                                                </table> 
                                            </td>
                                            <td width="50%">
                                                <table class="compraTabela">
                                                    <tr>
                                                        <td>
                                                            CARRINHO
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td style="height: 300px;vertical-align: top;">
                                                            <table width="100%"> 
                                                                <tr> 
                                                                    <td colspan="2"> 
                                                                        <div style="height: 250px;overflow: auto; font-size: 10pt;">
                                                                            <table width="100%">
                                                                                <tr>
                                                                                    <td width="70%" class="carrinhoNome">
                                                                                        [NOME DA REVISTA]
                                                                                    </td>
                                                                                    <td width="30%" class="carrinhoPreco">
                                                                                        [PREÇO]
                                                                                    </td>
                                                                                </tr>
                                                                                 <tr>
                                                                                    <td width="70%" class="carrinhoNome">
                                                                                        [NOME DA REVISTA]
                                                                                    </td>
                                                                                    <td width="30%" class="carrinhoPreco">
                                                                                        [PREÇO]
                                                                                    </td>
                                                                                </tr>
                                                                                 <tr>
                                                                                    <td width="70%" class="carrinhoNome">
                                                                                        [NOME DA REVISTA]
                                                                                    </td>
                                                                                    <td width="30%" class="carrinhoPreco">
                                                                                        [PREÇO]
                                                                                    </td>
                                                                                </tr>
                                                                                 <tr>
                                                                                    <td width="70%" class="carrinhoNome">
                                                                                        [NOME DA REVISTA]
                                                                                    </td>
                                                                                    <td width="30%" class="carrinhoPreco">
                                                                                        [PREÇO]
                                                                                    </td>
                                                                                </tr>
                                                                                 <tr>
                                                                                    <td width="70%" class="carrinhoNome">
                                                                                        [NOME DA REVISTA]
                                                                                    </td>
                                                                                    <td width="30%" class="carrinhoPreco">
                                                                                        [PREÇO]
                                                                                    </td>
                                                                                </tr>
                                                                            </table>
                                                                        </div>
                                                                    </td>
                                                                </tr> 
                                                                <tr>
                                                                    <td align="left">
                                                                        [TOTAL]
                                                                    </td>
                                                                    <td align="right">
                                                                        <input type="submit" value="COMPRAR" id="finalizarCompraBotao">
                                                                    </td>
                                                                </tr>
                                                            </table>
                                                        </td>
                                                    </tr>
                                                </table>
                                            </td>
                                        </tr>
                                    </table>
                                </form>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
            <tr>
                <td colspan="3">
                    <?php
                    require_once './rodape.php';
                    ?>
                </td>
            </tr>
        </table>
    </body>
</html>
