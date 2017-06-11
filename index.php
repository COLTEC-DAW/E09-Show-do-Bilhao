<html>
    <head>
            <title>Jogo do Bilhão</title>
            <meta charset="utf-8">
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
            <link rel="stylesheet" type="text/css" href="index.css">
    </head>
    <body>
        <div id="topo">

            <?php include 'menu.inc';
                if(!empty($_GET["id"])){
                    echo 'Login e/ou senha vazio(s)';
                }
            ?>
            <form action="trataLogin.php" method="POST">
                <div class="form-group">
                    Login: <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Login" name="login" >
                </div>
                <div class="form-group">
                    Senha: <input type="password" class="form-control" id="formGroupExampleInput2" placeholder="Senha" name="senha">
                </div>
            <input type="submit" value="Entrar">
        </form>
        </div>
        <div id=rodape>
            <?php include 'rodape.inc';?>
        </div>
    </body>

</html>