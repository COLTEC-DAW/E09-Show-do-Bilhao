<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Show do Bilhão</title>
    <link rel="stylesheet" href="../Styles/styles.css">
</head>
<body>
    <?php 
    session_start();
    if(isset($_SESSION['user'])){

        include "C:\Users\julia\OneDrive\Documentos\GitHub\E09-Show-do-Bilhao\Components/menu.inc";
        include "C:\Users\julia\OneDrive\Documentos\GitHub\E09-Show-do-Bilhao\Components/rodape.inc";
    }else{
        require "../index.php";
    }
    ?>
</body>
</html>