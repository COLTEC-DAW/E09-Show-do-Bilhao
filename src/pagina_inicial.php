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
    $menu = "partials/menu.inc.php";
    $rodape = "partials/rodape.inc.php";
    $caminho_arquivo_partials_perguntas = "partials/perguntas.inc.php";
    $logout = "partials/logout.inc.php";
    
    if (is_readable($menu)) include $menu;
    if (is_readable($caminho_arquivo_partials_perguntas)) include $caminho_arquivo_partials_perguntas; 
    else {
        echo "Página fora do ar";
        exit(1);
    }

    session_start();
    
    // if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    // }
    if ($_SERVER['REQUEST_METHOD'] === 'GET') {
        if(!isset($_SESSION['login']) && !isset($_SESSION['senha'])) {
            header('Location: login.php', TRUE, 301);
        }
    }    
    
    $now = date('d/m/Y | h:i:sa', strtotime('-3 hours'));
    $LoginUser = $_SESSION['login'] . 'lastlogin';
    $AcertosUser = $_SESSION['login'] . 'acertos';
    
    if(!isset($_COOKIE[$LoginUser])) {
        setcookie($LoginUser, $now);
        echo "Bem-vindo(a) {$_SESSION['login']}";
    } else {
        echo "Bem-vindo(a) {$_SESSION['login']}, seu último login foi em {$_COOKIE[$LoginUser]}.";
        $lastLogin = date('d/m/Y | h:i:sa', strtotime('-3 hours'));
        setcookie($LoginUser, $lastLogin);
    }

    if(isset($_COOKIE[$AcertosUser])){ 
        if($_COOKIE[$AcertosUser] != 5) echo " Você havia acertado {$_COOKIE[$AcertosUser]} na ultima tentativa";
        else echo " Você havia ganhado na ultima tentativa!";
    }
    $question = carregaPergunta(0, "perguntas.json");
    var_dump($question);
    ?>

    <h2><?= $question->enunciado ?></h2>
    <form action="perguntas.php" method="post">
        <input hidden name="pergunta" value="0">
        <?php for($j = 0; $j < count($question->alternativas[0]); $j++){
        echo "<div><input type='radio' id='{$j}' name='alternativa' value='{$j}'><label for='{$j}'>{$question->alternativas[$j]}</label></div>";
        }?>
        <br>
        <input type="submit" value="Enviar">
    </form>

    <?php
    if (is_readable($logout)) include $logout;

    ?>
    <?php
    if (is_readable($rodape)) include $rodape;
    ?>
</body>
</html>
