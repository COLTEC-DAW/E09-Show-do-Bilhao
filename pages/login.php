<?php
    
    session_start();

    include "../processing/cadastraNovoUsuario.php";

    if( $_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["nomeUsuario"], $_POST["emailUsuario"], $_POST["loginUsuario"], $_POST["senhaUsuario"]) ){
        $nomeUsuario = $_POST["nomeUsuario"];
        $emailUsuario = $_POST["emailUsuario"];
        $loginUsuario = $_POST["loginUsuario"];
        $senhaUsuario = $_POST["senhaUsuario"];

        cadastraNovoUsuario($nomeUsuario, $emailUsuario, $loginUsuario, $senhaUsuario);

    }else if($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['nomeUsuario']) && isset($_POST['senhaUsuario']))
    {
        $nomeUsuario = trim($_POST['nomeUsuario']);
        $senhaUsuario = trim($_POST['senhaUsuario']);
        echo"a";
        print_r($nomeUsuario);
        print_r($senhaUsuario);

        if (!empty($_POST["nomeUsuario"]) && !empty($_POST["senhaUsuario"])) {
            $_SESSION['nomeUsuario'] = $nomeUsuario . '';
            header ("location:../pages/perguntas.php");
        }
        else{
            echo "Insira algo no campo, babaca!!";
        }
    }

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

    <link href="../css/index.css" rel="stylesheet">

    <title>Login</title>
</head>
<body>
    <?php require "../templates/menu.inc.php"?>

    <div class="container">
        <div class="row justify-content-center">
            <div class="content mt-15" >                
                <form action="../pages/login.php" method="POST">
                <div class="form-group">
                    <label>Login</label>
                    <input type="text" name="nomeUsuario" class="form-control">
                </div>

                <div class="form-group">    
                    <label>Senha</label>
                    <input type="password" name="senhaUsuario" class="form-control">
                </div>

                <input type="submit" value="Login" class="mt-3">
                </form>
            
                <a href="../pages/cadastro.php" class="mt-3">Não possui cadastro? Clique aqui.</a>
            </div>
        </div>
    </div>

    <?php require "../templates/rodape.inc.php"?>
</body>
</html>