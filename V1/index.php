<?php
    session_start();
    ob_start();
?>
<!DOCTYPE>
<html>
    <head>
        <title>Bem vindo</title>
    </head>
    <body>
        <h1>BEM VINDO AO SHOW DO BILHÃO</h1>
        <?php
        // Verifica se login e a senha vem da sessao ou do post
		if(!$_SESSION["login"]) {
            $login = $_POST["login"];
			$senha = $_POST["senha"];
		}
        else {
            $login = $_SESSION["login"];
			$senha = $_SESSION["senha"];
		}

		if(!$login) { //Procedimento se não estiver logado
			header("Location: login.php");
		}
        else {//Senha correta
            $_SESSION["login"] = $login;
            ?>
            <p>As regras são claras! Responda às perguntas SEM ERRAR e ganhe UM BILHÃO</p>
            <form method="get" action="perguntas.php">
                <input type="hidden" name="num" value="0">
                <button type="submit">Começar</button>
            </form>
            <?php
        } ?>
        <?php include "rodape.inc"; ?>
    </body>
</html>