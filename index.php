<?php
    require('auth.inc.php');
    session_start();
    RedirectIfLogged()
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
        LogIn();
        include('footer.inc.php');
    ?>
</body>
</html>

