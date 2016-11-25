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
                                    MAIS POPULARES
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <table align="center" style="width: 85%;color: rgb(112,173,71);height: 100%;">
                                    <tr class="tdInfo2">
                                        <td>
                                            <table align="left">
                                                <tr>
                                                    <td class="nomeCategoria"><a href="categoria.php">
                                                            [NOME DA CATEGORIA]
                                                        </a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <table>
                                                            <tr>
                                                                <td>
                                                                    <a href="revista.php">
                                                                        <img src="img/revista.png" class="revista">
                                                                    </a>
                                                                </td>
                                                                <td class="tdInfo">
                                                                    <table class="revistaInfo">
                                                                        <tr class="tdInfo">
                                                                            <td>
                                                                                <b>
                                                                                    <a href="revista.php">
                                                                                        [NOME]
                                                                                    </a>
                                                                                </b>
                                                                            </td>
                                                                        </tr> 
                                                                        <tr class="tdInfo"> 
                                                                            <td>
                                                                                [EDITORA]
                                                                            </td>
                                                                        </tr>
                                                                        <tr style="height: 100px;"> 
                                                                            <td></td>
                                                                        </tr>
                                                                        <tr class="tdInfo">
                                                                            <td>
                                                                                <b>
                                                                                    [PREÇO]
                                                                                </b>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td class="tdCarrinho" align="center">
                                                                                <img src="img/carrinhoAd.png" class="carrinhoAd">
                                                                            </td>
                                                                        </tr>
                                                                    </table>
                                                                </td>
                                                            </tr>
                                                        </table>
                                                    </td>
                                                </tr>
                                            </table>
                                        </td>
                                        <td>
                                            <table align="right">
                                                <tr>
                                                    <td class="nomeCategoria"><a href="categoria.php">
                                                            [NOME DA CATEGORIA]
                                                        </a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <table>
                                                            <tr>
                                                                <td>
                                                                    <a href="revista.php">
                                                                        <img src="img/revista.png" class="revista">
                                                                    </a>
                                                                </td>
                                                                <td class="tdInfo">
                                                                    <table class="revistaInfo">
                                                                        <tr class="tdInfo">
                                                                            <td>
                                                                                <b>
                                                                                    <a href="revista.php">
                                                                                        [NOME]
                                                                                    </a>
                                                                                </b>
                                                                            </td>
                                                                        </tr> 
                                                                        <tr class="tdInfo"> 
                                                                            <td>
                                                                                [EDITORA]
                                                                            </td>
                                                                        </tr>
                                                                        <tr style="height: 100px;"> 
                                                                            <td></td>
                                                                        </tr>
                                                                        <tr class="tdInfo">
                                                                            <td>
                                                                                <b>
                                                                                    [PREÇO]
                                                                                </b>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td class="tdCarrinho" align="center">
                                                                                <img src="img/carrinhoAd.png" class="carrinhoAd">
                                                                            </td>
                                                                        </tr>
                                                                    </table>
                                                                </td>
                                                            </tr>
                                                        </table>
                                                    </td>
                                                </tr>
                                            </table>
                                        </td>
                                    </tr>
                                    <tr class="tdInfo2">
                                        <td>
                                            <table align="left">
                                                <tr>
                                                    <td class="nomeCategoria">
                                                        <a href="categoria.php">
                                                            [NOME DA CATEGORIA]
                                                        </a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <table>
                                                            <tr>
                                                                <td>
                                                                    <a href="revista.php">
                                                                        <img src="img/revista.png" class="revista">
                                                                    </a>
                                                                </td>
                                                                <td class="tdInfo">
                                                                    <table class="revistaInfo">
                                                                        <tr class="tdInfo">
                                                                            <td>
                                                                                <b>
                                                                                    <a href="revista.php">
                                                                                        [NOME]
                                                                                    </a>
                                                                                </b>
                                                                            </td>
                                                                        </tr> 
                                                                        <tr class="tdInfo"> 
                                                                            <td>
                                                                                [EDITORA]
                                                                            </td>
                                                                        </tr>
                                                                        <tr style="height: 100px;"> 
                                                                            <td></td>
                                                                        </tr>
                                                                        <tr class="tdInfo">
                                                                            <td>
                                                                                <b>
                                                                                    [PREÇO]
                                                                                </b>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td class="tdCarrinho" align="center">
                                                                                <img src="img/carrinhoAd.png" class="carrinhoAd">
                                                                            </td>
                                                                        </tr>
                                                                    </table>
                                                                </td>
                                                            </tr>
                                                        </table>
                                                    </td>
                                                </tr>
                                            </table>
                                        </td>
                                        <td>
                                            <table align="right">
                                                <tr>
                                                    <td class="nomeCategoria"><a href="categoria.php">
                                                            [NOME DA CATEGORIA]
                                                        </a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <table>
                                                            <tr>
                                                                <td>
                                                                    <a href="revista.php">
                                                                        <img src="img/revista.png" class="revista">
                                                                    </a>
                                                                </td>
                                                                <td class="tdInfo">
                                                                    <table class="revistaInfo">
                                                                        <tr class="tdInfo">
                                                                            <td>
                                                                                <b>
                                                                                    <a href="revista.php">
                                                                                        [NOME]
                                                                                    </a>
                                                                                </b>
                                                                            </td>
                                                                        </tr> 
                                                                        <tr class="tdInfo"> 
                                                                            <td>
                                                                                [EDITORA]
                                                                            </td>
                                                                        </tr>
                                                                        <tr style="height: 100px;"> 
                                                                            <td></td>
                                                                        </tr>
                                                                        <tr class="tdInfo">
                                                                            <td>
                                                                                <b>
                                                                                    [PREÇO]
                                                                                </b>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td class="tdCarrinho" align="center">
                                                                                <img src="img/carrinhoAd.png" class="carrinhoAd">
                                                                            </td>
                                                                        </tr>
                                                                    </table>
                                                                </td>
                                                            </tr>
                                                        </table>
                                                    </td>
                                                </tr>
                                            </table>
                                        </td>
                                    </tr>
                                </table>
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
