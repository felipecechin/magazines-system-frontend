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
                                    FORMAS DE PAGAMENTO
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div id="DescricaoMenuInferior">
                                    [TEXTO...
                                </div>
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
