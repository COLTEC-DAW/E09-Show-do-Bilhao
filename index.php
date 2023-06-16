<?php require('auth.inc.php');
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
        session_start();
        // include('menu.inc.php');
        
        LogIn();
        include('footer.inc.php');
    ?>
</body>
</html>

