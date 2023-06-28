<?php
    require('auth.inc.php');
    $atMenu = false;
    session_start();
    LogUser();
?>

<html>
<head>
	<title>My first PHP script</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1 class="title"> Show do Item Não Familiar </h1>
    <br>
    <?php
        // include('menu.inc.php');
        LogScreen();
        include('footer.inc.php');
    ?>
</body>
</html>

