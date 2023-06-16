<?php
    require "../users/loadUser.inc.php";

    if (isset($_POST['login']) && isset($_POST['email']) && isset($_POST['name']) && isset($_POST['password'])) {
        $obj = new User($_POST['login'],$_POST['email'],$_POST['name'],$_POST['password']);
        register_user($obj);
    }
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Show do Milhão</title>
    <link rel="stylesheet" href="../css/MainPage.css">
</head>
<body>

<img src="../images/SBT.png" alt="">
<img src="../images/show_do_milhao.png" alt="">
<img src="../images/Coltec.png" alt="">
<img src="../images/Coltec2.png" alt="">
    <h1>Jogo do Bixo</h1>

    <form action="Game.php" method="get">
        <input type="submit" value="Jogar">
        <input type="hidden" name="pergunta" value="1">
    </form>

</body>
</html>