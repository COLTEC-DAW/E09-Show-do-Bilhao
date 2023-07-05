<?php
    session_start();
    require('auth.inc.php');
    $loggedIn = false;
    $atMenu = true;
?>

<html>
<head>
	<title>Sevtech: Quiz</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1 class="title"> Show do Item Não Familiar </h1>
    <h1 class="animated"> Sevtech Quiz </h1>
    <?php
        include('menu.inc.php');
        include('footer.inc.php');
    ?>
</body>
</html>

