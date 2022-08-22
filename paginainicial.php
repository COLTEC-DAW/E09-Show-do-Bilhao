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
        $footer = "partials/rodape.inc";
        $questions = "partials/questions.inc";
        $logout = "partials/logout.inc";
        $start = "partials/start.inc";

        if(is_readable($menu)) include $menu;
        if(is_readable($questions)) include $questions; 

        session_start();
        
        if(isset($_POST['username']) && isset($_POST['password']) ) {
            //if(auth($_POST['username'], $_POST['password']) ) {
            //if($_POST['username'] == $_SESSION['username'] && $_POST['password'] == $_SESSION['password']) {
                $_SESSION['username'] = $_POST['username'];
                $_SESSION['password'] = $_POST['password'];
                echo "Bem-vindo(a) de volta, {$_SESSION['username']}!";
            //} else {
            //    echo "Usuário ou senha inválidos";
            //    header( "Location: cadastro.php" );
            //}
        } else {
            if($_SERVER['REQUEST_METHOD'] === 'GET') {
                if(!isset($_SESSION['username'])) {
                    header('Location: cadastro.php');
                }
            } else {
                echo "Usuário ou senha inválidos";
                header( "Location: cadastro.php" );
            }
            header( "Location: cadastro.php" );
        } 

        if(!isset($_COOKIE['username'])) {
            setcookie('username', $_SESSION['username']);
            setcookie('rightAnswers', $0);
            echo "Bem-vindo(a), {$_COOKIE['username']}!";
            $_SESSION['lastAccess'] = date("F d, Y h:i:s A");
        } else {
            echo "Seu último login foi em {$_SESSION['lastAccess']}.";
            if(isset($_COOKIE['rightAnswers'])) echo "Você acertou {$_COOKIE['rightAnswers']} na ultima tentativa";
            $_SESSION['lastAccess'] = date("F d, Y h:i:s A");
        }

        if(is_readable($start)) include $start;

        if(is_readable($logout)) include $logout;

        ?>
        <?php
        if(is_readable($footer)) include $footer;
        ?>
    </body>
</html>
