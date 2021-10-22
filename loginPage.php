<?php
    if(isset($_GET['logout'])){
        session_destroy();
        header("Location: loginPage.php");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login!</title>
</head>
<body>
    <form action="index.php" method="post">
        Login: <input type="text" name="login"> <br>
    <input type="submit" name="Log-in">
</form>
<?php
    $_SESSION['HobbesfaelMartins'] = 0;
?>
</body>
</html>