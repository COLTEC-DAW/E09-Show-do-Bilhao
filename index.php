<?php

    session_start();

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Show do Bilhão!</title>
</head>
<body onload="fraseBoba()">
    <div>
        <h1>Bem-vindo ao Show do Bilhão!</h1>
        <h5 id="descricao_comica"></h5>
        
        <form action="telaUser.php" method="post">
            
            <div id="parteLogin">
                <div class="camposLogin"><label>Login: <input type="text" name="login"></label></div>
                <div class="camposLogin"><label>Senha: <input type="password" name="senha"></label></div>
            </div>

            <h6 id="cadastroText">Ainda não possui cadastro? <a href="./cadastro.php">Clique aqui</a> para se cadastrar!</h6>

            <div id="parteBotao">
                <input type="submit" value="Fazer Login">
            </div>
        </form>
    </div>
    <?php include("rodape.inc");
    
        session_destroy();

    ?>
    <script src="script.js"></script>
</body>
</html>