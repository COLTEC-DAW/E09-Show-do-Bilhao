<!Doctype>
<html>
    <?php $num= $_GET["num"] ?>
    <head>
        <title>Show do Bilhão: <?php $num ?> </title>
    </head>
    <body>
        <h1>Pergunta <?php $num ?>: </h1>

        <FORM name="resposta" method="post" action="respostas.php">
            <Input type = 'Radio' name = "<?php echo $num ?>" value=0>
                <?php echo $respostas[$num][0] ?>
                <br>
            <Input type = 'Radio' name = "<?php echo $num ?>" value=1>
                <?php echo $respostas[$num][1] ?>
                <br>
            <Input type = 'Radio' name = "<?php echo $num ?>" value=2>
                <?php echo $respostas[$num][2] ?>
                <br>
            <Input type = 'Radio' name = "<?php echo $num ?>" value=3>
                <?php echo $respostas[$num][3] ?>
                <br>
        </FORM>
    </body>
</html>