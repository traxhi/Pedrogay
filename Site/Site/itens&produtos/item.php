<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Script Storm - Principal</title>
    <link rel="stylesheet" href="item.css">
</head>

<body>
<?php
    include("../principais/menu.html")
        ?>
    <div class="D1">
        <div class="D2">
            <div class="imagem2">
                <img src="../imagens/imagem2.jpg" alt="imagem1" height="350" width="350">
            </div>
        </div>
        <div class="D3"></div>
        <div class="D2">
            <div class="titulo">
                A Cidade de Plástico <br>
                <div class="tag">
                    MANUSCRITO <br>
                </div>
                <div class="descricao">
                    A Cidade de Plástico conta a história de uma menina <br>
                    que achava que vivia em um mundo encantado. <br>
                    <br>
                </div>
                <div class="botao1">
                    <a href="capitulo1.html"><button> LER </button></a>
                </div>
                <div class="estrelas">
                    <img onclick="Preencher('estrela1');" src="../imagens/star0.png" class="estrela" id="estrela1">
                    <img onclick="Preencher('estrela2');" src="../imagens/star0.png" class="estrela" id="estrela2">
                    <img onclick="Preencher('estrela3');" src="../imagens/star0.png" class="estrela" id="estrela3">
                    <img onclick="Preencher('estrela4');" src="../imagens/star0.png" class="estrela" id="estrela4">
                    <img onclick="Preencher('estrela5');" src="../imagens/star0.png" class="estrela" id="estrela5">
                </div>
            </div>
        </div>
    </div>


</body>
<script src="animateto.js"></script>
<script>
function Preencher(qual)
{
    expressao=/star1/g
    resposta=expressao.test(document.getElementById(qual).src)
    if (resposta==true)
    {
        document.getElementById(qual).src="../imagens/star0.png" 
    }
    else
    {
     document.getElementById(qual).src="../imagens/star1.png"
    }
}
</script>
</html>