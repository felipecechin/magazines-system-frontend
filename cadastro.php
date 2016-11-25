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
        <script src="js/jquery.maskedinput.js"></script>
        <script>
            $(document).ready(function () {
                $('#telefone').mask('(99) 9999-9999');
            });
        </script>
    </head>
    <body onload="document.getElementById('texto1').focus()">
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
                                    CADASTRO
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <form action="index.php" method="post">
                                    <table id="caixaFormCadastro">
                                        <tr>
                                            <td>
                                                <input type="text" placeholder="Nome completo" name="nome" class="texto" id="texto1" required=""> 
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <input type="text" placeholder="RG" name="rg" class="texto" required=""> 
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <input type="text" placeholder="Endereço" name="endereco" class="texto" required=""> 
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <input type="text" placeholder="Telefone" name="telefone" class="texto" id="telefone" required=""> 
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <input type="text" placeholder="E-mail" name="email" class="texto" required=""> 
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <input type="password" placeholder="Senha" name="senha" class="texto" required=""> 
                                            </td>
                                        </tr>
                                        <tr>
                                            <td align="right">
                                                <input type="submit" value="Cadastrar" id="caixaFormBotao">
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
