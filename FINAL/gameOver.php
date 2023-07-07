<?php

    require "usuarios.inc.php";
    session_start();
    
    if(isset($_POST["acertos"])){
        $acertos = $_POST["acertos"] - 1;
    }else{
        $acertos = 0;
    }

    $usuarioM = $_SESSION["usuario"];
    $usuario = unserialize($usuarioM);
    $nomeCOOKIEacerto = "lastAcertos" . $usuario->username;
    $lastAcertos = $acertos;
    
    setcookie($nomeCOOKIEacerto);
    setcookie($nomeCOOKIEacerto, $lastAcertos);

?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Game Over</title>
</head>
<body>
    <h1>You lose!</h1>
    <p>Vc acertou <?php echo $acertos?> questoes</p>
    <form action="jogo.php" method="post">
        <input type="submit" value="Restart">
    </form>

    <?php include "rodape.inc";?>

    
</body>
</html>