<!Doctype>
<?php session_start(); ?>
<html>
    <head>
        <title>Bem vindo</title>
    </head>
    <body>
        <h1>BEM VINDO AO SHOW DO BILHÃO</h1>
        <p>As regras são claras! Responda às perguntas SEM ERRAR e ganhe UM BILHÃO</p>
        <?php
		if(!$_SESSION["login"]) { // Set de variáveis o usuário ainda não estiver logado
			$login = $_POST["login"];
			$senha = $_POST["senha"];
		}
        else { //Set de variáveis estiver logado
			$login = $_SESSION["login"];
			$senha = $_SESSION["senha"];
		}

		if(!$login) { //Procedimento se não estiver logado
			header("Location: login.php");
		}
        else if(validar($login, $senha)) {//Senha correta
			$_SESSION["login"] = $login;
			$_SESSION["senha"] = $senha;
            ?>
            <form method="get" action="perguntas.php?num=0">
                <button type="submit">Começar</button>
            </form>
            <?php
        }
        else { //Senha incorreta
			?>
            <h2>Falha no login</h2>";
			<a href='/login.php'>Tentar Novamente</a>;
            <?php
		}
        include "rodape.inc"; ?>
    </body>
</html>