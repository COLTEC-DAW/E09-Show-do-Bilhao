<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate" />
    <meta http-equiv="Pragma" content="no-cache" />
    <meta http-equiv="Expires" content="0" />
    <link rel="stylesheet" href="style.css"/>
    <title>Show do Bilhão</title>
</head>
<body>
    <?php
    include "partials/perguntas.inc"; 

    redireciona($_GET["id"]);
    if (isset($_POST["user"]) && isset($_POST["senha"])){
        checaLogin($_POST["user"], $_POST["senha"]);
    }
    carregaPergunta($_GET["id"], $enunciados, $alternativas);  
    ?>
</body>
</html>