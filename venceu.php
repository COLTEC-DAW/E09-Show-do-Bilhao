<?php ob_start();
session_start();
if($_SESSION['usuario'] != null){
?>
<html>
    <head>
        <title>Jogo do Bilhão</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="index.css">
    </head>
    <body>
        <h2 id="comeco">TEMOS UM VENCEDOR !</h2>
        <?php 
        date_default_timezone_set('America/Sao_Paulo');
        setcookie("data", date("d/m/Y"));
        ?>
         <div class="col-md-12">
                <button type="button" class="btn btn-success center-block" onclick="location.href = 'inicio.php' ;">Jogar De Novo</button>
            </div>
    </body>
</html>
<?php
}
else{
    header("location: index.php");
}?>