<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Show do Bilhão</title>
    <link rel="stylesheet" href="Styles/styles.css">
</head>
<body>
    <?php 
    session_start();
    if(isset($_SESSION['user'])){
        require "Pages/PaginaInicial.php";
    }
    ?>
    <form method="POST" action="/Services/ConfereLogin.php">
        <input type="text" name="login" id="login" 
        placeholder="Nome de usuário">
        <input type="password" name="senha" id="senha">
        <button type= "submit">Fazer login</button>
    </form>
</body>
</html>