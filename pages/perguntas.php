<?php 
    session_start();

    if(isset($_SESSION['nomeUsuario'])){

        $loginUsuario = trim($_SESSION['nomeUsuario']);
        if (isset($_POST['sair']) && ((int)$_POST['sair'] == -1)) {
            unset($loginUsuario);
            session_destroy();
            header("location:../pages/index.php");
        }

        $id = $_GET['id'] ?? 0;

        setcookie($loginUsuario, ($id + 1));

        if(isset($_COOKIE[$loginUsuario]))
        {
            echo $_COOKIE[$loginUsuario];    
        }
    }else{
        header("location:../pages/index.php");
    }
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

    <link href="../css/index.css" rel="stylesheet">

    <title>Perguntas</title>
</head>
<body>
    <?php require "../templates/menu.inc.php"?>
        
    <?php require "../templates/questoes.php"?>

    <?php checarResposta();?>

    <div class="container">
        <div class="row">        
                <form action="../pages/perguntas.php" method="POST">
                    <input type="submit" value="Sair">
                    <input type="hidden" name="sair" value="-1">
                </form>
        </div>
    </div>

    <div class="container">
    <div class="row">
        <?php 
        echo "Logado como: " . $loginUsuario . "</br>";
        echo "Pontuação: " . ($id+1) . "</br>";
        echo "Data do ultimo acesso: " .date('d-m-Y H:i') . "</br>";
        ?>
    </div>
    </div>

    <?php require "../templates/rodape.inc.php"?>
</body>
</html>
