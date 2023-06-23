<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Show do Bilhão</title>
</head>
<body>
    <?php

        session_start();

        //requires
        require "user.inc";
        require "loginFunctions.inc";

        if(isset($_SESSION['user']))
        {
            echo "Você esta logado!!!";
            echo "<a href='index.php'>Voltar</a>";
        }
        else
        {
            rightForm();
        }

    ?>
</body>
</html>