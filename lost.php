<?php
    if(isset($_POST["acertos"])){
        $acertos = $_POST["acertos"] - 1;
    }else{
        $acertos = 0;
    }
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <link rel="stylesheet" href="./style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>pagina-perdedor</title>
</head>
<body>
    <h1>Você perdeu</h1>
    <h2>Não é um conhcedor de cultura Pop</h2>
    <p>Número de acertos <?php echo $acertos?></p>
    <form action="index.php" method="post">
        <input type="submit" value="Jogar novamente">
    </form>
</body>
</html>