<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Cadastro de Usuário</title>
</head>
<body>
    <div>
        <?php include("./menu.inc"); ?>
        
        <h1>Cadastre-se já!</h1>
        <h5>É rápido, fácil e não demora! Pera... eu disse que era rápido 2 vezes!?</h5>

        <form action="verificaCadastro.php" method="post">
            
            <div id="parteLogin">
                <div class="camposLogin"><label>Nome: <input type="text" name="nome"></label></div>
                <div class="camposLogin"><label>Email: <input type="text" name="email"></label></div>
                <div class="camposLogin"><label>Login: <input type="text" name="login"></label></div>
                <div class="camposLogin"><label>Senha: <input type="password" name="senha"></label></div>
            </div>

            <div id="botaoCadastro">
                <input type="submit" value="Cadastrar-se!">
            </div>
        </form>
    </div>
    <?php include("rodape.inc");?>
    <script src="script.js"></script>
</body>
</html>