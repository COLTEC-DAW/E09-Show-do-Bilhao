<?php session_start(); ?>
<!Doctype>
<?php
    function validar($login, $senha){
        $arquivo = fopen("users.json", 'r');
        $txt = "";
        while(!feof($arquivo)) $txt .= fgets($arquivo);
        $json = json_decode($txt);
        fclose($arquivo);
        foreach ($json as $pessoa) {
            if ($pessoa->login == $login && $pessoa->senha == $senha) return true;
        }
        return false;
    }
?>
<html>
    <head>
        <title>Bem vindo</title>
    </head>
    <body>
        <h1>BEM VINDO AO SHOW DO BILHÃO</h1>
        <p>As regras são claras! Responda às perguntas SEM ERRAR e ganhe UM BILHÃO</p>
        <?php
        // Verifica se login e a senha vem da sessao ou do post
		if(!$_SESSION["login"]) {
            echo "login vindo post";
			$login = $_POST["login"];
			$senha = $_POST["senha"];
		}
        else {
            echo "login vindo da session";
			$login = $_SESSION["login"];
			$senha = $_SESSION["senha"];
		}

		if(!$login) { //Procedimento se não estiver logado
			header("Location: login.php");
		}
        else if(validar($login, $senha)) {//Senha correta
            echo "<h2>Login bem sucedido</h2>";
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
            <h2>Falha no login</h2>
			<a href='/login.php'>Tentar Novamente</a>
            <?php
		}
        include "rodape.inc"; ?>
    </body>
</html>