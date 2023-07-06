<?php
    require_once __DIR__ . "/../../models/perguntas.inc";
    require_once __DIR__ . "/../../models/user.inc";
    require_once  __DIR__ . "/../../controllers/utils.inc";

    session_start();

    if (!isset($_SESSION['log']))
        header('location: login.php');

    $method = $_SERVER['REQUEST_METHOD'];

    if (!isset($totalPerguntas))
        $totalPerguntas = Perguntas::getTotalPerguntas();

    if (!isset($_COOKIE['qtdAcertos'])) {
        setcookie('qtdAcertos', 0);
        $qtdAcertos = 0;
    } else {
        $qtdAcertos = $_COOKIE['qtdAcertos'];
    }


    if(isset($_COOKIE['ultimaPontuacao'])){
        $ultimaPontuacao = $_COOKIE['ultimaPontuacao'];
    } else {
        $ultimaPontuacao = 0;
        setcookie('ultimaPontuacao', 0);
    }

    if ($method == 'POST') {
        $pergunta_id = $_POST['pergunta_id'];


        if (isset($_POST['alternativa'])) {
            if ($_POST['alternativa'] + 1 === Perguntas::carregaPergunta($pergunta_id)->alternativa_correta) {
                $qtdAcertos++;
                setcookie('qtdAcertos', $qtdAcertos);
                header("location: perguntas.php?pergunta_id=" . ++$pergunta_id);

            } else {
                setcookie('ultimaPontuacao', $qtdAcertos);
                $ultimaPontuacao = $qtdAcertos;
                header('location: gameover.php');
            }

            if ($pergunta_id + 1 >= Perguntas::getTotalPerguntas()) {
                setcookie('ultimaPontuacao', $qtdAcertos);
                $ultimaPontuacao = $qtdAcertos;
                header('location: win.php');
            }
        } else {
            $pergunta_id = $_POST['pergunta_id']; 
        }

    } elseif ($method == 'GET') {
        if (isset($_GET['pergunta_id']))
            $pergunta_id = $_GET['pergunta_id'];
        else {
            $pergunta_id = 0;
            setcookie('qtdAcertos', 0);
            $qtdAcertos = 0;
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
    <link rel="stylesheet" href="../stylish/stilo.css">
    <title>Document</title>
    <style>
        .container{
            min-height: 100%;
            display: flex;
            flex-direction: column; 
        }

        .cc{
            color: darkgoldenrod;
            font-size: 30px;
            align-self: center;
        }

        .i{
            transition: 500ms;
        }
        .i:hover{
            transform: scale(1.2);
        }

        .p{
            transition: 300ms;
        }
        .p:hover{
            text-decoration: underline white;
        }
    </style>
</head>
<body>
    <div class="container">

        <?php 
            include "../incs/menu.inc"; 
            $pergunta = Perguntas::carregaPergunta($pergunta_id);
        ?>

        <form action="" method="post" style="margin: 15px">
        <h2>
            <?php echo $pergunta_id + 1 . ") "; ?>
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
        <input type="hidden" id="pergunta_id" name="pergunta_id" value="<?php echo $pergunta_id ?>">
        <button type="submit" class="check-button">Checar Resposta</button>
        <p class="result-message"></p>
        </form>
    </div>

    <?php include "../incs/rodape.inc"; ?>
</body>
</html>
