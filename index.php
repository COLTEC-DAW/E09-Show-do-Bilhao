
<?php

session_start();


function autenticar($usuario, $senha) {
    return true;
}


if (!isset($_SESSION["autenticado"])) {
   
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["usuario"], $_POST["senha"])) {
        $usuario = $_POST["usuario"];
        $senha = $_POST["senha"];

     
        if (autenticar($usuario, $senha)) {
            $_SESSION["usuario"] = $usuario;


            $_SESSION["autenticado"] = true;
            $_SESSION["n_acertos"] = 0;
            header("Location: perguntas.php?id=0"); 

        } else {
            $erroLogin = "Usuário ou senha inválidos.";
        }
    }
} elseif (isset($_GET["logout"])) {
   
    session_unset();
    session_destroy();
    setcookie("n_acertos"); 
    header("Location: index.php"); 
}


?>



<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Show dos Otakus</title>

        <link rel="stylesheet" href="reset.css">
        <link rel="stylesheet" href="style.css">
    </head>

    <body>
        <?php include "menu.inc"?>

        <main style="flex-direction:column">
            <h2>Login</h2>

            <?php if (isset($erroLogin)){ ?>
                <p><?php echo $erroLogin; ?></p>
            <?php } ?>
            
            <?php if (!isset($_SESSION["autenticado"])){ ?>
                <form method="post" action="index.php">
                    <label for="usuario">Usuário:</label>
                    <input type="text" name="usuario" required><br>
                    <label for="senha">Senha:</label>
                    <input type="password" name="senha" required><br>
                    <input type="submit" value="Entrar">
                </form>
            <?php } else { ?>
                <p>Você está autenticado como <?php echo $_SESSION["usuario"]; ?></p>
                <p>Última vez logado: <?php echo $_COOKIE["ultimo_acesso"]; ?></p>
                <p>Última pontuação: <?php echo $_COOKIE["n_acertos"]; ?></p>
                
                <a href="perguntas.php?id=0">Iniciar o jogo</a><br>
                <a href="?logout">Logout</a>


                <?php setcookie("n_acertos");?>
            <?php } ?>
        
        </main>

        <?php include "rodape.inc"?>
    </body>

</html>