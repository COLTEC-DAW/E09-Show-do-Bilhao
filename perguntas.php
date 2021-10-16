<?php
    /** Inclusões */
    include 'perguntas.inc';
    
    /** Variáveis: */
    $id = $_POST['id']; //id da pergunta
    $login = $_POST['login'];
    $senha = $_POST['senha'];

    $arquivo = fopen("users.txt", "r");
    $info = verificaUser($arquivo, $login); // var info contem a string com as informações do user;
    $infoArray = explode(" ", $info); // passa de string pra array;
    atualizaArquivo($infoArray, $id);

    // manipulando através do jason
    $json = file_get_contents("perguntas.json");
    $perguntas = json_decode($json);

    /** Procedimentos */
    if($id != null){ carregaPergunta($id, $perguntas);  } 

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
            <form class="form" action="respostas.php" method="post">
                (a) <input type="checkbox" name="escolha" value="a">  <br>
                (b) <input type="checkbox" name="escolha" value="b">  <br>
                (c) <input type="checkbox" name="escolha" value="c">  <br>
                (d) <input type="checkbox" name="escolha" value="d">  <br>
                <input type="hidden" name="pergunta" value=<?=$id?> /> <br>
                <input type="hidden" name="login" value=<?=$login?>>
                <input type="hidden" name="senha" value=<?=$senha?>>
                <input type="submit" name="Enviar"><br>
            </form>
            <form class="form" action="index.php">
                <input type="submit" name="Sair" value="Sair"><br>
            </form>
        </section>
    </div>
    <footer class="col_12" id="footer">
        <p> Desenvolvimento de Aplicações Web - COLTEC/UFMG </p>
        <p> Laiza Ferreira Lage </p>
    </footer>
</body>
</html>
