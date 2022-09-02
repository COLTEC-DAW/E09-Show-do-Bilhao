<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="estilo.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login!</title>
</head>
<body>
    <?php
        if(isset($_GET["id"])){
            if($_GET["id"] == 1){
                echo("<h3>Login ou senha incorreto tente novamente!!</h3>");
            }
        }else{
            echo("<h2>Bem vindo ao Show do Bilhao!</h2>");
            echo("<h3>Escolha uma das opçoes abaixo!!</h3>");
        }
    ?>
    <form action="autentificar.php">
    <button type="submit">Login</button>
    </form>
    <form action="cadastrar.php">
    <button type="submit">Cadastrar</button>
    </form>
</form>
</body>
</html>


