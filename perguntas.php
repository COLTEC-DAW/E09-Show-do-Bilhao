<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Show do Bilhão</title>
</head>
<body>
    <?php
    $menu = "partials/menu.inc";
    $rodape = "partials/rodape.inc";
    $paginaPerguntas = "partials/perguntas.inc";
    $logout = "partials/logout.inc";
    
    if(is_readable($menu))
    {
        include $menu;
    }
    if(is_readable($paginaPerguntas))
    {
        include $paginaPerguntas; 
    }
    else
    {
        echo "Esta página está fora do ar";
        exit(1);
    }
    
    $enunciado = ["Pergunta 1", "Pergunta 2", "Pergunta 3", "Pergunta 4", "Pergunta 5"];
    $alternativa = 
    [
        ["Alternativa 1A", "Alternativa 2A", "Alternativa 3A", "Alternativa 4A", "Alternativa 5A"],
        ["Alternativa 1B", "Alternativa 2B", "Alternativa 3B", "Alternativa 4B", "Alternativa 5B"],
        ["Alternativa 1C", "Alternativa 2C", "Alternativa 3C", "Alternativa 4C", "Alternativa 5C"],
        ["Alternativa 1D", "Alternativa 2D", "Alternativa 3D", "Alternativa 4D", "Alternativa 5D"],
        ["Alternativa 1E", "Alternativa 2E", "Alternativa 3E", "Alternativa 4E", "Alternativa 5E"],
    ];
    $resposta = [1,2,3,4,5];

    session_start();
    
    if ($_SERVER['REQUEST_METHOD'] === 'POST')
    {
        if(!isset($_SESSION['username']))
        {
            header('Location: cadastro.php', TRUE, 200);
        }
    }
    if ($_SERVER['REQUEST_METHOD'] === 'GET')
    {
        if(!isset($_SESSION['username']))
        {
            header('Location: cadastro.php', TRUE, 200);
        }
    }

    $acertosPorUser = $_SESSION['username'];
    $acertosPorUser .= 'acertos';
    
    if($respostas[$_POST['pergunta']] == $_POST['alternativa'])
    {
        $acertoPergunta = $_POST['pergunta'] + 1;
        setcookie($acertosPorUser, $acertoPergunta);
        if($_POST['pergunta'] == count($enunciado) - 1)
        {
            header("Location: gamewon.php", TRUE, 200);
            exit(1);
        }
        carregaPergunta($_POST['pergunta'] + 1, $enunciado, $alternativa);
        echo "Você já acertou {$acertoPergunta} perguntas.";
    }
    else
    {
        header("Location: gameover.php", TRUE, 200);
    }

    if(is_readable($logout))
    {
        include $logout;
    }

    ?>
    <?php
    if(is_readable($rodape))
    {
        include $rodape;
    }
    ?>
</body>
</html>
