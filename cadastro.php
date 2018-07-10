<?php
    $tudoOK = 0;
    if (isset($_POST["nome"])){
        $Pessoa->nome = $_POST["nome"];
        $Pessoa->email = $_POST["email"];
        $Pessoa->login = $_POST["login"];
        $Pessoa->senha = $_POST["senha"];

        $PessoaJSON = json_encode($Pessoa);
        $ArquivoJSON = file_get_contents("Arquivos/users.json");

        // Verifica login //
        if (strpos($ArquivoJSON, "\"login\":\"".$Pessoa->login)){
            echo "Nome de usuário já cadastrado";
        // Verifica  email //
        }else if (strpos($ArquivoJSON, "\"login\":\"".$Pessoa->login)){
            echo "Nome de usuário já cadastrado";
        }else{
            if($ArquivoJSON == "[]"){
                $ArquivoJSON = str_replace("[", "[".$PessoaJSON, $ArquivoJSON);
            }else{
                $ArquivoJSON = str_replace("[", "[".$PessoaJSON.",", $ArquivoJSON);
            }
        
            $file = fopen("Arquivos/users.json", "w");
            fwrite($file, $ArquivoJSON);
            fclose($file); 

            echo '<h1> Usuario Cadastrado com sucesso!<h1>';
            header("Location:index.php");
        }

    }
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
                <input type="email" class="form-control" name="email" placeholder="Email">
            </div>
                
            <div class="form-group">
                <input type="text" class="form-control" name="login" placeholder="Login">
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
