<?php
    require_once("loadUser.inc.php");
    require_once("User.php");

    if (isset($_POST['login']) && isset($_POST['email']) && isset($_POST['name']) && isset($_POST['password'])) {

        $a = $_POST['login'];

        $b = $_POST['email'];

        $c = $_POST['name'];

        $d = $_POST['password'];

        $obj = new User($a,$b,$c,$d);
        register_user($obj);
    }

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Show do Bilhão</title>
    <link rel="stylesheet" href="css/MainPage.css">
</head>
<body>
    <h1>Jogo do Bixo</h1>

    <form action="Game.php" method="get">
        <input type="submit" value="Jogar">
        <input type="hidden" name="pergunta" value="1">
    </form>

</body>
</html>