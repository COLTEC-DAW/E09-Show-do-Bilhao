<?php
    require "Includes/autenticacao.inc";
    $erro = verifica_cadastro($_POST["nome"], $_POST["login"], $_POST["email"], $_POST["senha"]);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Bem vindo</title>
</head>
<body>
    <?php include "Includes/menu.inc" ?>
    <h1 class="text-center">Cadastre-se gratuitamente</h1>
    
    <div class="container">    
        <form class="justify-content-center" action="cadastro.php" method="post">
            <div class="form-group">
                <input type="text" class="form-control" name="nome" placeholder="Nome">
            </div>

            <div class="form-group">
                <?php if ($erro == "Email já cadastrado") {
                        echo '<input type="email" class="form-control input-erro" name="email" placeholder="Email">';
                        echo '<small class="form-text msg-erro">'.$erro.'</small>';
                    }else{
                        echo '<input type="email" class="form-control" name="email" placeholder="Email">';
                    }
                ?>
            </div>
                
            <div class="form-group">
                <?php if ($erro == "Nome de usuário já cadastrado") {
                        echo '<input type="text" class="form-control input-erro" name="login" placeholder="Login">';
                        echo '<small class="form-text msg-erro">'.$erro.'</small>';
                    }else{
                        echo '<input type="text" class="form-control" name="login" placeholder="Login">';
                    }
                ?>    
            </div>
                
            <div class="form-group">
                <input type="password" class="form-control" name="senha" placeholder="Senha">
            </div>
            <button type="submit" class="btn btn-primary">Cadastrar</button>
        </form>
    </div>

    <?php include "Includes/footer.inc" ?>
</body>
</html>
