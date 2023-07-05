<?php
    session_start();
    require('auth.inc.php');
    $output = LogUser();
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
            if($output == 1)
                echo '<h1 class="warning">Usuario invalido</h1>';
            include('footer.inc.php');
        ?>
    </body>
</html>

