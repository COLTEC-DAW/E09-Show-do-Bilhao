
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php 

        $conteudo = 'perguntas.php';
        $menu = "menu.inc";
        $enunciados = "perguntas.inc";
        $rodape = "rodape.inc";

        $name = htmlspecialchars($_POST['username']);
        setcookie('username', $name);

        if (is_readable($conteudo)) include $conteudo;
        if (is_readable($menu)) include $menu;
        if (is_readable($enunciados)) include $enunciados;

        session_start();

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {

            $_SESSION['username'] = $_POST['username'];
            $_SESSION['password'] = $_POST['password'];
        }
        if ($_SERVER['REQUEST_METHOD'] == 'GET') {
            if(!isset($_SESSION["username"]) || !isset($_SESSION["password"])) {
                header("Location: login.php");
            }
        }
        $_SESSION['finalLogin'] = date('d/m/Y | h:i', strtotime('-3 hours'));
    
        echo "Utimo login de $name em {$_SESSION['finalLogin']}";

        carregaPergunta(0, $perguntas, $alternativas);
       
        echo "<form action='logout.php' method='GET'>
        <br>    
        <button type='submit'>Log-Out</button>
        </form>";

        if (is_readable($rodape)) include $rodape;
    
    ?>
    
</body>
</html>