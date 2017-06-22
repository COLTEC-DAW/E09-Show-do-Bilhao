<html>
    <head>
            <title>Jogo do Bilhão</title>
            <meta charset="utf-8">
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
            <link rel="stylesheet" type="text/css" href="index.css">
    </head>
    <body>
        <div id="topo">
            <form action="cadastra.php" method="POST">
                <div class="form-group">
                    Nome: <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Nome" name="name" >
                </div>
                <div class="form-group">
                    E-Mail: <input type="text" class="form-control" id="formGroupExampleInput" placeholder="E-Mail" name="email" >
                </div>
                <div class="form-group">
                    Login: <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Login" name="login" >
                </div>
                <div class="form-group">
                    Senha: <input type="password" class="form-control" id="formGroupExampleInput2" placeholder="Senha" name="senha">
                </div>
            <input type="submit" class="btn btn-primary" value="Cadastrar">
                <br>
                <br>
                <button type="button" class="btn btn-primary" onclick="location.href = 'index.php' ;">VOLTAR A TELA DE LOGIN</button>
                    
        </div>
    </body>
</html>