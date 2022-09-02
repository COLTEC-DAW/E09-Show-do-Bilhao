<?php 
    include("./components/questions.php");

    session_start();
    if(!isset($_SESSION['username'])) {
        header("location: register.php");
    }

    $username = $_SESSION['username'];
    $questionId = 0;
    $hits = 0;

    if(isset($_GET["id"])) {
        $questionId = $_GET["id"];
    }

    if(isset($_POST["answer"])) {
        $previousAnswer = $_POST["answer"];
        $previousOptionSelected = $_POST["alternative"];
        $lastMaxScore = $_COOKIE[$username . "ScoreMax"];

        $hits = $questionId - 1;
        $_SESSION['hits'] = $hits;
        if($lastMaxScore < $hits) {
            setcookie($username . "ScoreMax", $hits);
        }

        if($previousAnswer != $previousOptionSelected) {
            header("Location: gameOver.php");
        } 

        if($questionId == 5) {
            header("Location: win.php");
        }
    }

    $_SESSION['hits'] = $hits;
    $question = loadQuestion($questionId);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/styles.css">
    <title>Show do Bilhão</title>
</head>
<body>
    <?php 
        include("./components/header.php");
    ?>

    <div class="content">
        <div>
            <h2><?= $questionId + 1?>) <?= $question->statement?></h2> <br>
            <form action="question.php?id=<?= $questionId + 1?>" method="post">
                <input type="radio" name="alternative" value="0" id="">
                <label for="0"><?= $question->alternatives[0] ?></label> <br>
                <input type="radio" name="alternative" value="1" id="">
                <label for="1"><?= $question->alternatives[1] ?></label> <br>
                <input type="radio" name="alternative" value="2" id="">
                <label for="2"><?= $question->alternatives[2] ?></label> <br>
                <input type="radio" name="alternative" value="3" id="">
                <label for="3"><?= $question->alternatives[3] ?></label> <br>
                <input type="hidden" name="answer" value="<?= $question->answer ?>"> <br>
                <input type="submit" name="submitButton" value="Enviar!">
            </form>
        </div>
    </div>

    <?php 
        include("./components/footer.php");
    ?>
</body>
</html>