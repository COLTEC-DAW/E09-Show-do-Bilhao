<?php 
    session_start();

    if(!isset($_SESSION['username'])) {
        header("location: register.php");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/styles.css">
    <title>Jogo do Bilhão</title>
</head>
<body>
    <?php 
        include("./components/header.php")
    ?>

    <div class="content">
        <h1>
            Bem-vindo ao Jogo do Bilhão, <?php echo "{$_SESSION['username']}";?>
        </h1>
        <h2>Versão Lingua Portuguesa</h2>
        <br>

        <?php 
           $lastTimeOnline = $_COOKIE["{$_SESSION['username']}LastLogin"];
           $ScoreMax = $_COOKIE["{$_SESSION['username']}ScoreMax"];

           echo "Última vez online: {$lastTimeOnline}<br>";
           echo "Pontuação máxima: {$ScoreMax}";
        ?>

        <form method="post" action="question.php?id=0">
            <Input type="submit" name="startButton" value="COMEÇAR">
        </form>
    </div>

    <?php 
        include("./components/footer.php");
    ?>
</body>
</html>