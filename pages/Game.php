<?php
    session_start();
    require "../questions/loadQuestion.inc.php";
    require "../users/User.php";

    if (!isset($_SESSION["user"])) {
        header("Location: MainPage.php?msg");
    }else{
        $login = $_SESSION["user"];
    }

    $username =  $_SESSION["user"];
    $user = new User(null, null, $username, null);

    $numPerguntas = count(json_decode(file_get_contents("../questions/Perguntas.json")));

    $id = $_GET['pergunta'] - 1;

    if (isset($_POST['escolha'])) {
        $escolha = $_POST['escolha'];
    }

    if (isset($_POST['resposta'])) {
        $resposta = $_POST['resposta'];
    }

    if($numPerguntas == $id){
        $user->setHighscore($id);
        header("Location: Win.php");
    }

    if (isset($_POST['escolha']) && isset($_POST['resposta'])) {
        if($escolha != $resposta){
            $user->setHighscore($id - 1);
            header("Location: Lose.php?score=".($id-1));
        }
    }

    $questao = load_question($id,"../questions/Perguntas.json");
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="https://avatars.githubusercontent.com/u/104566026?v=4" type="image/x-icon">
    <link rel="stylesheet" href="../css/Game.css">
    <title>Show do Milhão</title>
</head>

<body>
    <div class="page-wrapper">
        <?php include "templates/header.inc"; ?>

        <main>
            <div class="pergunta">
                <h1>Pergunta <?= $id + 1?></h1>
                <h2><?= $questao->question ?></h2>
            </div>
            <form action="Game.php?pergunta=<?php echo $_GET['pergunta']+1?>" method="post">
                <input hidden name="resposta" value=<?=$questao->answer?>>
                <?php
                for ($i=1; $i <= sizeof($questao->options); $i++) {
                    echo "<div class='alternativa'><input type='radio' id='{$i}' name='escolha' value='{$i}' required>
                    <label for='{$i}'>{$questao->options[$i-1]}</label></div>";
                }
                ?>
                <input type="submit" value="Enviar">
            </form>
        </main>


        <?php include "templates/footer.inc"; ?>
    </div>
</body>
</html>