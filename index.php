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
                    <table style="border: 1px solid rgb(112,173,71); min-height: 400px; width: 100%; color: white;" cellspacing="0">
                        <tr>
                            <td style="height: 25px;">
                                <div  style="background-color: rgb(112,173,71); margin: -6px 0px 0px -2px; display: table;padding-right: 5px; padding-left: 5px;">
                                    MAIS POPULARES
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <table align="center" style="width: 85%;color: rgb(112,173,71);">
                                    <tr>
                                        <td>
                                            <table align="left">
                                                <tr>
                                                    <td style="text-align: center;">[NOME DA CATEGORIA]</td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <table>
                                                            <tr>
                                                                <td>
                                                                    <img src="img/revista.png" class="revista">
                                                                </td>
                                                                <td style="vertical-align: top;">
                                                                    <table style="height: 220px;">
                                                                        <tr style="vertical-align: top;">
                                                                            <td>
                                                                                <b>
                                                                                    [NOME]
                                                                                </b>
                                                                            </td>
                                                                        </tr> 
                                                                        <tr style="vertical-align: top;"> 
                                                                            <td>
                                                                                [EDITORA]
                                                                            </td>
                                                                        </tr>
                                                                        <tr style="height: 100px;"> 
                                                                            <td></td>
                                                                        </tr>
                                                                        <tr style="vertical-align: top;">
                                                                            <td>
                                                                                <b>
                                                                                    [PREÇO]
                                                                                </b>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td style="background: rgb(112,173,71); height: 30px;cursor: pointer;" align="center">
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
                                                    <td style="text-align: center;">[NOME DA CATEGORIA]</td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <table>
                                                            <tr>
                                                                <td>
                                                                    <img src="img/revista.png" class="revista">
                                                                </td>
                                                                <td style="vertical-align: top;">
                                                                    <table style="height: 220px;">
                                                                        <tr style="vertical-align: top;">
                                                                            <td>
                                                                                <b>
                                                                                    [NOME]
                                                                                </b>
                                                                            </td>
                                                                        </tr> 
                                                                        <tr style="vertical-align: top;"> 
                                                                            <td>
                                                                                [EDITORA]
                                                                            </td>
                                                                        </tr>
                                                                        <tr style="height: 100px;"> 
                                                                            <td></td>
                                                                        </tr>
                                                                        <tr style="vertical-align: top;">
                                                                            <td>
                                                                                <b>
                                                                                    [PREÇO]
                                                                                </b>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td style="background: rgb(112,173,71); height: 30px;cursor: pointer;" align="center">
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
                                    <tr>
                                        <td>
                                            <table align="left" style="padding-top: 30px;">
                                                <tr>
                                                    <td style="text-align: center;">[NOME DA CATEGORIA]</td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <table>
                                                            <tr>
                                                                <td>
                                                                    <img src="img/revista.png" class="revista">
                                                                </td>
                                                                <td style="vertical-align: top;">
                                                                    <table style="height: 220px;">
                                                                        <tr style="vertical-align: top;">
                                                                            <td>
                                                                                <b>
                                                                                    [NOME]
                                                                                </b>
                                                                            </td>
                                                                        </tr> 
                                                                        <tr style="vertical-align: top;"> 
                                                                            <td>
                                                                                [EDITORA]
                                                                            </td>
                                                                        </tr>
                                                                        <tr style="height: 100px;"> 
                                                                            <td></td>
                                                                        </tr>
                                                                        <tr style="vertical-align: top;">
                                                                            <td>
                                                                                <b>
                                                                                    [PREÇO]
                                                                                </b>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td style="background: rgb(112,173,71); height: 30px;cursor: pointer;" align="center">
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
                                            <table align="right" style="padding-top: 30px;">
                                                <tr>
                                                    <td style="text-align: center;">[NOME DA CATEGORIA]</td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <table>
                                                            <tr>
                                                                <td>
                                                                    <img src="img/revista.png" class="revista">
                                                                </td>
                                                                <td style="vertical-align: top;">
                                                                    <table style="height: 220px;">
                                                                        <tr style="vertical-align: top;">
                                                                            <td>
                                                                                <b>
                                                                                    [NOME]
                                                                                </b>
                                                                            </td>
                                                                        </tr> 
                                                                        <tr style="vertical-align: top;"> 
                                                                            <td>
                                                                                [EDITORA]
                                                                            </td>
                                                                        </tr>
                                                                        <tr style="height: 100px;"> 
                                                                            <td></td>
                                                                        </tr>
                                                                        <tr style="vertical-align: top;">
                                                                            <td>
                                                                                <b>
                                                                                    [PREÇO]
                                                                                </b>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td style="background: rgb(112,173,71); height: 30px;cursor: pointer;" align="center">
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
