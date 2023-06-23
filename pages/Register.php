<?php
    session_start();
    if(isset($_GET['msgL']))
    {
        $message = "Alguém já tem esse usuário, escolha outro";
    }

    if(isset($_GET['msgE']))
    {
        $message = "Email já cadastrado, escolha outro";
    }

    //Existe apenas para evitar login sobre login
    if(isset($_SESSION["user"])){
        header("Location: MainPage.php");
    }
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/MainPage.css">
    <title>Show do Milhão</title>
</head>
<body>
<?php include "templates/message.inc"; ?>

<form action="MainPage.php" method="post">
Login <input type="text" name="new_login" id="" required><br><br>
Senha <input type="password" name="new_password" id="" required><br><br>
Email <input type="email" name="email" id="" required><br><br>
Nome <input type="text" name="name" id="" required><br><br>
<input type="hidden" name="register">

<input type="submit" value="Registrar">
</form>
    
</body>
</html>