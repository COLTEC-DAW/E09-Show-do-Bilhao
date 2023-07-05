<?php
    session_start();
    require('auth.inc.php');
    $output = SingUp();
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
        if($output == 1)
            echo '<h1 class="warning">Dados incompletos</h1>';
        else if($output == 2)
            echo '<h1 class="warning">Login ja em uso</h1>';
        SingScreen();
        include('footer.inc.php');
    ?>
</body>
</html>

