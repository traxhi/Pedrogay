<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Script Storm - Cadastro</title>
    <link rel="stylesheet" href="cadastro autor.css">
</head>

<body>
    <?php
    include("../principais/menu.html")
        ?>
    <div class="caixa">
        <div class="esquerda">
            <div class="campos">
                Nome <br> <br>
                <input type="text" id="txtBusca" class="nome" />
                <br> <br>
                E-mail <br> <br>
                <input type="text" id="txtBusca" class="email" />
                <br> <br>
                Senha <br> <br>
                <input type="text" id="txtBusca" class="senha" />
                <br> <br>
            </div>
        </div>
        <img src="../imagens/perfil.png" class="perfil" height="150" width="150">
        <div class="direita">
            <div class="campos">
                Data de Nascimento<br> <br>
                <input type="text" id="txtBusca" class="datanas" />
                <br> <br>
                Biografia <br> <br>
                <input type="text" id="txtBusca" class="biografia" />
                <br> <br>
                Gênero
                <br> <br>

                <div class="generos">
                    <div class="op">
                        <input type="radio" name="o"> Romance
                    </div>
                    <div class="op">
                        <input type="radio" name="o"> Ficção
                    </div>
                    <div class="op">
                        <input type="radio" name="o"> Fantasia
                    </div>
                    <div class="op">
                        <input type="radio" name="o"> Artigo
                    </div>
                    <div class="op">
                        <input type="radio" name="o"> Outro
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="botao1">
        <a href="pagamento.html"><button>CONTINUAR</button></a>
    </div>
</body>
<Script src="../java/animateto.js"></Script>

</html>