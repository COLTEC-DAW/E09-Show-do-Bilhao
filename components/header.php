<?php 
    if(isset($_POST['logout'])){
        session_start();

        $username = $_SESSION['username'];

        setcookie("{$username}LastLogin", date('d/m/Y | h:i:sa', strtotime('-3 hours')));
        unset($_SESSION['username']);


        echo "<script> window.location.href = 'register.php' </script>";
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="header">
        <div>
            <h1>JOGO DO BILHÃO</h1>
        </div>
        <div>
            <form method="post">
                <input type="submit" name="logout" value="Sair">
            </form>
        </div>
    </div>
</body>
</html>
