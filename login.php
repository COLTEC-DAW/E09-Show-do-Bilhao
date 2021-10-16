<?php
    include 'perguntas.inc';
    $arquivo = fopen("users.txt", "r"); //somente para leitura
    arqVazio($arquivo);  // verificar se o arquivo está vazio.

    $login = htmlspecialchars($_POST['login']);
    $senha = htmlspecialchars($_POST['senha']);

    $_SESSION["login"] = $login;
    $_SESSION["senha"] = $senha;
    // caso não tenha sido passado nada de parametro
    if($_SESSION["login"] == null){
        $message = "Login inválido. ";
        echo "<script type='text/javascript'>alert('$message');</script>";
        redireciona();
    }
    if($_SESSION["senha"] == null){
        $message = "Senha inválida. ";
        echo "<script type='text/javascript'>alert('$message');</script>";
        redireciona();
    }

    $info = verificaUser($arquivo, $login); // var info contem a string com as informações do user;
    $infoArray = explode(" ", $info); // transformando cada parte da string em um array

    //imprimir a ultima pontuação e o ultimo dia de acesso
    echo ' Último acesso: ';
    echo($infoArray[4]); //dia de acesso
    echo '</br> Última pontuação: ';
    echo($infoArray[5]); 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta encoding="utf-8">
    <meta name="desenvolvedor" content="Laiza Ferreira">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Show Do Bilhão</title>
    <link rel="stylesheet" href="./detalhes.sass" />
    <link rel="stylesheet" href="./arquivo.sass" />
</head>
<body class="body"> 
    <div class="container">
        <section>
        <br>
            <form class="form" action="perguntas.php" method="post">
                <input type="hidden" name="id" value="0">
                <input type="hidden" name="login" value=<?=$login?>>
                <input type="hidden" name="senha" value=<?=$senha?>>
                <input type="submit" value="Start"><br>
            </form>
        </section>
    </div>
</body>
</html>