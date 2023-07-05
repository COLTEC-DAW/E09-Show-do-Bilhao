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
    <?php
        include('menu.inc.php');
        include('footer.inc.php');
    ?>
</body>
</html>

