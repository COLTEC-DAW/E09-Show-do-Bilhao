<?php
    require_once __DIR__ . "/../../models/perguntas.inc";
    require_once __DIR__ . "/../../models/user.inc";

    session_start();

    if (!isset($_SESSION['isLogged']))
        header('location: login.php');

    $method = $_SERVER['REQUEST_METHOD'];

    if (!isset($totalPerguntas))
        $totalPerguntas = Perguntas::getTotalPerguntas();

    if (!isset($_COOKIE['acertos'])) {
        setcookie('acertos', 0);
        $acertos = 0;
    } else {
        $acertos = $_COOKIE['acertos'];
    }


    if(isset($_COOKIE['ultimaPontuacao'])){
        $ultimaPontuacao = $_COOKIE['ultimaPontuacao'];
    } else {
        $ultimaPontuacao = 0;
        setcookie('ultimaPontuacao', 0);
    }

    if ($method == 'POST') {
        $perguntaID = $_POST['perguntaID'];


        if (isset($_POST['alternativa'])) {
            if ($_POST['alternativa'] + 1 === Perguntas::carregaPergunta($perguntaID)->resposta) {
                $acertos++;
                setcookie('acertos', $acertos);
                header("location: perguntas.php?perguntaID=" . ++$perguntaID);

            } else {
                setcookie('ultimaPontuacao', $acertos);
                $ultimaPontuacao = $acertos;
                header('location: gameover.php');
            }

            if ($perguntaID + 1 >= Perguntas::getTotalPerguntas()) {
                setcookie('ultimaPontuacao', $acertos);
                $ultimaPontuacao = $acertos;
                header('location: win.php');
            }
        } else {
            $perguntaID = $_POST['perguntaID']; 
            echo "<div class='err'><p>Selecione uma alternativa antes responder.</p></div>";
        }

    } else if ($method == 'GET') {
        if (isset($_GET['perguntaID']))
            $perguntaID = $_GET['perguntaID'];
        else {
            $perguntaID = 0;
            setcookie('acertos', 0);
            $acertos = 0;
        }
    }
?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@40,700,0,0" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Mono&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../../assets/stylish/stilo.css">
    <link rel="stylesheet" href="../../assets/stylish/rodape.css">
    <link rel="stylesheet" href="../../assets/stylish/pergunta.css">
    <title>QUIZ</title>
</head>
<body>
    <?php 
        include "../incs/menu.inc"; 
        $pergunta = Perguntas::carregaPergunta($perguntaID);
    ?>
    
    <div class="container">
        <form action="" method="post" style="margin: 15px">
            <h2>
                <?php echo $perguntaID + 1 . ") "; ?>
                <?php echo $pergunta->enunciado; ?>
            </h2>

            <ul>
                <?php 
                foreach ($pergunta->alternativas as $index => $alternativa) {
                    echo "<li style='list-style: none'>";
                        echo "<label>";
                            echo "<input type='radio' name='alternativa' value='$index'>";
                            echo $alternativa;
                        echo "</label>";
                    echo "</li>";
                }?>
            </ul>
            <input type="hidden" id="perguntaID" name="perguntaID" value="<?php echo $perguntaID ?>">
            <button type="submit" class="check-button">Checar Resposta</button>
            <p class="result-message"></p>
        </form>
    </div>

    <script>
        setTimeout(function() {
            var errDiv = document.querySelector('.err');
            if (errDiv) {
                errDiv.style.display = 'none';
            }
        }, 4500);
    </script>

    <?php include "../incs/rodape.inc"; ?>
</body>
</html>
