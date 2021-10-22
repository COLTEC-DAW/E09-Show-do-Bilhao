<?php
    include 'lib\header.inc';
    include 'lib\footer.inc';
    include 'lib\intro.inc';

    session_start();
    
    if(isset($_GET["logout"])){
        session_start();
        session_unset();
        session_destroy();
        header("Location: index.php");
    }
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css"  href="style.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <title>Show do Bilhão</title>
</head>

<body>
    <?php echo getHeader() ?>
    <?php echo getIntro() ?>
    <?php echo getFooter() ?>
</body>
</html>