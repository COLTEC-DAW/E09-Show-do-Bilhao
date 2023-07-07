<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

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

    <h1>Welcome to TM's Billion</h1>
    <h3><?= $texto ?></h3>

    
    <div>

        <form action="jogo_bilhao.php" method="POST">

            <label>Login</label><br>
            <input name="nome" type="text" required><br><br>

            <label>Senha</label><br>
            <input name="senha" type="password" required><br><br>

            <button type="submit">
                Entrar
            </button>

        </form>

    </div>
    <div>

        <form action="cadastro.php">
            
            <button type="submit">
                Cadastrar
            </button>
        </form>
    </div>
</body>
</html>