<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        session_start();

        $usuario = $_POST['user'];
        $senha = $_POST['password'];
        $erro = 0;

        $arquivo = json_decode(file_get_contents("json/usuarios.json"));
        if($arquivo == null)
        {
            header("Location: cadastro.php");
        }else{
            foreach ($arquivo as $usuarios){
                if($usuarios->usuario == $usuario){
                    if($usuarios->senha == $senha){
                        $_SESSION["senha"] = $_POST["password"];
                        $_SESSION["user"] = $_POST["user"];
                        header("Location: perguntas.php?id=0");
                    }else{
                        $erro = 1;
                    }
                    
                }
            }
        }
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
        <script src="https://kit.fontawesome.com/f294d9b5b8.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="style.css">
        <title>Verificando o login</title>
    </head>
    <body> 
        <h1>Erro durante efetuação de login:</h1>
        <?php
            if($erro==0){ ?>
                <p>
                    O usuário inserido não está cadastrado, tente novamente ou clique no botão de cadastro para que se crie o usuário desejado.
                </p>
                <a href="cadastro.php"><button>Cadastrar</button></a>
            <?php }else if($erro==1){ ?>
                <p>
                    A senha inserida não corresponde a original, tente novamente.
                </p>
            <?php }
        }
        ?>
        <a href="index.php"><button>Retornar</button></a>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
    </body>
</html>