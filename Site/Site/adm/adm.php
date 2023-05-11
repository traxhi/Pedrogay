<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Script Storm - ADM</title>
    <link rel="stylesheet" href="../cadastro&login/cadastro.css">
</head>

<body>
<?php
    include("../principais/menu.html")
        ?>
    <form action="crud.php" method="post">
        <div class="D1">
            <div class="perfil">
                <img src="../imagens/perfil.png" height="150" width="150">
            </div>
            <div class="campos">
                Nome <br> <br>
                <input type="text" id="txtBusca" class="nome" name="nome" />
                <br> <br>
                E-mail <br> <br>
                <input type="text" id="txtBusca" class="email" name="email" />
                <br> <br>
                Senha <br> <br>
                <input type="text" id="txtBusca" class="senha" name="senha" /> <br>
            </div>
            <div class="botao1">
              <input type="submit" value="CONTINUAR" name="inserir" class="botao">
              <input type="submit" value="EXCLUIR" name="excluir" class="botao">
              <input type="submit" value="ALTERAR" name="alterar" class="botao">
              <input type="submit" value="LISTAR" name="listar" class="botao">
            </div>
        </div>
    </form>
    </body>
    <script src="../java/animateto.js"></script>

</html>