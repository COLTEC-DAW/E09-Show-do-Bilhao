<?php
    if(isset($_SESSION["logado"])){
        header("Location: Index.php");
    }
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/style.css">
    <title>Show do Bilhão</title>
</head>

<body>
    <div class="page-wrapper">

        <main>
            <form action="Index.php" method="post">
                <div class="form">Login <input type="text" name="login" id="" required></div>
                <div class="form">Senha <input type="password" name="senha" id="" required></div>
                <input type="hidden" name="log">
                <input type="submit" value="Login">
            </form>
        </main>

    </div>
</body>
</html>