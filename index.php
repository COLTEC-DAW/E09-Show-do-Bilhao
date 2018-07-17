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
    <?php 
    session_start();
    require "Models/UserDao.php";
    require "Models/User.php";
    
    $erro; // Armazena o erro ao fazer o login

    if (isset($_POST["login"]) && isset($_POST["senha"])){
        $dao = new UserDao();
        $usuario = $dao->read($_POST["login"]); // Recupera usuario pelo login
        if ($usuario == null){ // Se usuário não foi encontrado
            $erro = "Usuário não encontrado";
        }else if ($usuario->verifica_login( $_POST["senha"] )){ // Se senha == senha correta
            $_SESSION["login"] = $_POST["login"];
            $_SESSION["senha"] = $_POST["senha"];
            $erro = "nenhum";
        }else{
            $erro = "Senha incorreta";
        }
    }
     
    
    if (isset($_SESSION["login"])){
        header("Location:perguntas.php");
        exit();
    }else{
        session_destroy();
    }
     

    include "Includes/menu.inc" ?>
    <h1 class="text-center">Bem vindo! Antes de continuar faça seu login</h1>
    
    <div class="container">    
        <form action="index.php" method="post">
            <div class="form-group">                
                <?php if ($erro == "Usuário não encontrado") {
                        echo '<input type="text" class="form-control input-erro" name="login" placeholder="Login">';
                        echo '<small class="form-text msg-erro">'.$erro.'</small>';
                    }else{
                        echo '<input type="text" class="form-control" name="login" placeholder="Login">';
                    }
                ?>
            </div>    
            
            <div class="form-group">
                <?php if ($erro == "Senha incorreta") {
                        echo '<input type="password" class="form-control input-erro" name="senha" placeholder="Senha">';
                        echo '<small class="msg-erro form-text">'.$erro.'</small>';
                    }else{
                        echo '<input type="password" class="form-control" name="senha" placeholder="Senha">';
                    }
                ?>
            </div>
    
            <button type="submit" class="btn btn-primary">ENTRAR</button>
        </form>
        <div class="text-center mt-3">
            <a href="cadastro.php">Não é cadastrado? Junte-se à nós!</a>
        </div>
    </div>

    <?php include "Includes/footer.inc" ?>

</body>
</html>
