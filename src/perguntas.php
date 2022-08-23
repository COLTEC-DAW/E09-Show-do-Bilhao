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
    $caminho_arquivo_partials_perguntas = "partials/perguntas.inc";
    $logout = "partials/logout.inc";
    
    if (is_readable($menu)) include $menu;
    if (is_readable($caminho_arquivo_partials_perguntas)) include $caminho_arquivo_partials_perguntas; 
    else {
        echo "Página fora do ar";
        exit(1);
    }
    
    $enunciados = [
        "Segundo a gramática, 'y' é uma/um:",
        "Bandex?",
        "Segundo o ICP, qual é o maior mal da atualidade?",
        "Ao ouvir o tema de grafos, quem é a pessoa mais provável de estar falando sobre:",
        "Qual das alternativas a seguir 'dá shape': "
    ];
    $alternativas = [
        ["Vogal","Depende","Semivogal","Consoante"],
        ["No almoço", "No almoço e jantar", "Eu prefiro comer na Engenharia", "No café da manhã, almoço e jantar"],
        ["Eliezer/Esquerda", "Astrologia", "Bebida", "Neoliberalismo"],
        ["Ullas", "Moras", "Amanda", "Éric"],
        ["Fruta", "Bandex", "Café", "Corote"]
    ];
    $respostas = [1,3,1,0,1];

    session_start();
    
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        if(!isset($_SESSION['login']) && !isset($_SESSION['senha'])) header('Location: cadastro_usuario.php', TRUE, 301);
    }
    if ($_SERVER['REQUEST_METHOD'] === 'GET') {
        if(!isset($_SESSION['login']) && !isset($_SESSION['senha'])) header('Location: cadastro_usuario.php', TRUE, 301);
    }

    $AcertosUser = $_SESSION['login'] . 'acertos';
    
    if($respostas[$_POST['pergunta']] == $_POST['alternativa']){
        $respostas_acertadas = $_POST['pergunta'] + 1;
        setcookie($AcertosUser, $respostas_acertadas);
        if($_POST['pergunta'] == count($enunciados) - 1){
            header("Location: ganhaste.php", TRUE, 301);
            exit(1);
        }
        carregaPergunta($_POST['pergunta'] + 1, $enunciados, $alternativas);
        echo "Você já acertou {$respostas_acertadas} perguntas.";
    } else {
        header("Location: game_over.php", TRUE, 301);
    }

    if (is_readable($logout)) include $logout;

    ?>
    <?php
    if (is_readable($rodape)) include $rodape;
    ?>
</body>
</html>
