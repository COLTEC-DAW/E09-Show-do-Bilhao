<?php 
    session_start();
    
    if(!isset($_SESSION['username'])) {
        header("location: register.php");
    }

    $username = $_SESSION['username'];

    if($_SESSION['hits'] > (int) $_COOKIE["{$username}ScoreMax"]) {
        setcookie("{$username}ScoreMax", (string) $_SESSION['hits']);
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
        include ("./components/header.php");
    ?>

    <div class="content">
        <h1>F</h1>
        <p>Não foi dessa vez...</p>
        <?php 
            $username = $_SESSION['username'];
            echo "Quantidade de acertos: {$_SESSION['hits']}";
        ?>
        <a href="index.php">tente novamente</a>
    </div>

    <?php 
        include ("./components/footer.php");
    ?>
</body>
</html>