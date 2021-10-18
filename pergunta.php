<!DOCTYPE html>
<?php require 'perguntas.inc';?>

<html>
<head>
	<title>Show do Bilhão</title>
	<meta charset="utf-8"/>
</head>
<body>
    <?php include 'menu.inc';?>

    <?php
    carregaPergunta($_GET['id']);
    ?>

    <br>
    <?php include 'rodape.inc';?>

</body>
</html>

