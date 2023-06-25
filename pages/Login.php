<?php
    session_start();
    if(isset($_GET['msg']))
    {
        $message = "Usuário ou senha errados";
    }

    //Existe apenas para evitar login sobre login, talvez eu tire no futuro
    if(isset($_SESSION["user"])){
        header("Location: MainPage.php");
    }
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/Login.css">
    <title>Show do Milhão</title>
</head>
<body>
<?php include "templates/message.inc"; ?>

<form action="MainPage.php" method="post">
Login <input type="text" name="login" id="" required><br><br>
Senha <input type="password" name="password" id="" required><br><br>
<input type="hidden" name="log">
<input type="submit" value="Login">
</form>


<?php include "templates/footer.inc"; ?>    
</body>
</html>