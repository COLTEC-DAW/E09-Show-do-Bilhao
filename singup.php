<?php
    require('auth.inc.php');
    $atMenu = false;
    session_start();
    SingUp();
?>

<html>
<head>
	<title>Sevtech: Quiz</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1 class="title"> Show do Item Não Familiar </h1>
    <br>
    <?php
        // include('menu.inc.php');
        SingScreen();
        include('footer.inc.php');
    ?>
</body>
</html>

