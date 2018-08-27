<?php
    require "classes/JsonDAO.php";
    require "classes/User.php";
    session_start();
    if(!isset($_SESSION["username"])){
        session_destroy();
        header("Location: /login.php");
    } else {
        $username = $_SESSION["username"];
        $json = new JsonDAO("Users.json");
        $user = $json->getUser($username);
    }

?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>Você Ganhou</title>
</head>
<body>
    <?php include "partials/_menuLogado.php" ?>
    <div class="container">
        <div class="jumbotron w-50 mx-auto mt-5">
            <h2 class="text-center">Parabéns <?= $user["nome"] ?> você ganhou!</h2>
            <h4 class="text-center">Sua pontuação foi de <?= $user["score"] ?> pontos</h4>
            <h4 class="text-center">você logou em <?= $user["lastLogin"] ?></h4>
        </div>
    </div>
</body>
</html>