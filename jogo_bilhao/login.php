<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="login.css">


    <title>Document</title>
</head>
<body>
    
    <?php 
    
    session_start();

    $verificador = 0;

    if (isset($_SESSION["verificadorLogin"])){

        $verificador = $_SESSION["verificadorLogin"];

    }

    if ($verificador == 0){

        $texto = "Login";

    } else if ($verificador == 1){

        $texto = "Senha Incorreta";

    } elseif ($verificador == 2){

        $texto = "Usuário inexistente";

    }

    ?>

    <h1 class="texto" id="titulo">Bem vindo ao Show do Bilhão</h1>
    <h3 class="texto"><?= $texto ?></h3>

    
    <div class="cadastro">

        <form id ="formularioEntrar" action="jogo_bilhao.php" method="POST">

            <label class="titulo-input">Login</label><br>
            <input name="nome" class="input" type="text" maxlength="100" required><br><br>

            <label class="titulo-input">Senha</label><br>
            <input name="senha" class="input" type="password" maxlength="100" required><br><br>

            <button type="submit" class="btn btn-dark">
                Entrar
            </button>

        </form>

    </div>

    <div class="cadastro">

        <form id ="formularioCadastrar" action="cadastro.php">
            
            <button id="botao-cadastrar" type="submit" class="btn btn-dark">
                Cadastrar
            </button>

        </form>

    </div>

</body>
</html>