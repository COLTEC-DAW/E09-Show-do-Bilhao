<?php
    session_start();
    
    require('auth.inc.php');
    $atMenu = true;
    Check_SignUp();
    Check_LogIn();
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
        echo $atMenu;
        include('footer.inc.php');
    ?>
</body>
</html>

