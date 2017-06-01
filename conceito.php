<!DOCTYPE html>
<html>
    <head>
        <title>$HOW DO BIÃO</title>
    </head>
    <body>
        <h1>Bem vindo à prova conceito do Show do Bilhão</h1>
        <?php
            require "perguntas.inc";

            for($i = 0; $i<20; $i++){
                echo $perguntas[$i];
                echo nl2br("\n\n");
            ?>
            <FORM name="resposta" method="post" action="respostas.php">
                <Input type = 'Radio' name = "<?php echo $i ?>" value=0>
                    <?php echo $respostas[$i][0] ?>
                    <br>
                <Input type = 'Radio' name = "<?php echo $i ?>" value=1>
                    <?php echo $respostas[$i][1] ?>
                    <br>
                <Input type = 'Radio' name = "<?php echo $i ?>" value=2>
                    <?php echo $respostas[$i][2] ?>
                    <br>
                <Input type = 'Radio' name = "<?php echo $i ?>" value=3>
                    <?php echo $respostas[$i][3] ?>
                    <br>
            </FORM>
            <?php
                echo nl2br("\n");
            }
        ?>
    </body>
</html>