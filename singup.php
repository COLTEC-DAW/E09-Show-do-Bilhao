<?php
    session_start();
    require('auth.inc.php');
    SingUp();
?>

<html>
<head>
	<title>Sevtech: Quiz</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1 class="title"> Show do Item Não Familiar </h1>
    <?php
        include('menu.inc.php');
        $atMenu = true;
        $loggedIn = false;
        SingScreen();
        include('footer.inc.php');
    ?>
</body>
</html>

