
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
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
        $_SESSION['username'] = $_POST['username'];
    }
    if ($_SERVER['REQUEST_METHOD'] === 'GET')
    {
        if(!isset($_SESSION['username'])) {
            header('Location: cadastro.php');
        }
    }
    
    $now = date('d/m/Y | h:i:sa', strtotime('-3 hours'));
    $LoginUser = $_SESSION['username'];
    $LoginUser .= 'lastlogin';
    $AcertosUser = $_SESSION['username'];
    $AcertosUser .= 'acertos';
    
    if(!isset($_COOKIE[$LoginUser]))
    {
        setcookie($LoginUser, $now);
        echo "Bem-vindo(a) {$_SESSION['username']}";
    }else
    {
        echo "Bem-vindo(a) {$_SESSION['username']}, seu último login foi em {$_COOKIE[$LoginUser]}.";
        $lastLogin = date('d/m/Y | h:i:sa', strtotime('-3 hours'));
        setcookie($LoginUser, $lastLogin);
    }

    if(isset($_COOKIE[$AcertosUser])) echo " Você havia acertado {$_COOKIE[$AcertosUser]} na ultima tentativa";

    carregaPergunta(0, $enunciado, $alternativa);

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
