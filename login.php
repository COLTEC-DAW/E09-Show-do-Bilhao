<?php
    session_start();
    require('auth.inc.php');
    $saida = LogUser();
?>

<html>
    <head>
        <title>My first PHP script</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <h1 class="title"> Show do Item Não Familiar </h1>
        <?php
            include('menu.inc.php');
            $atMenu = true;
            $loggedIn = false;
            LogScreen();
            include('footer.inc.php');
        ?>
    </body>
</html>

