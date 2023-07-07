<?php
    //Existe para evitar o acesso à página com uma sessão já ativa
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
    <title>Show do Milhão</title>
</head>

<body>
    <div class="page-wrapper">

        <main>
            
            <form action="Index.php" method="post">

                <div class="form">Login <input type="text" name="novoLogin" id="" required></div>
                <div class="form">Senha <input type="password" name="novaSenha" id="" required></div>
                <div class="form">Email <input type="email" name="email" id="" required></div>
                <div class="form">Nome <input type="text" name="nome" id="" required></div>
                <input type="hidden" name="reg">
                <input type="submit" value="Registrar">
            </form>
        </main>

    </div>

</body>
</html>