!DOCTYPE <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

        $perguntas[0]= "";
        $perguntas[1]= "";
        $perguntas[2]= "";
        $perguntas[3]= "";
        $perguntas[4]= "";

        $alternativa[0]= "a";
        $alternativa[1]= "c";
        $alternativa[2]= "d";
        $alternativa[3]= "b";
        $alternativa[4]= "a";


    ?>

    <ul>
        <?php
            foreach($matriz as $linha) {
                echo "<li>$linha[0]<\li>" 
            }
        ?>
    </ul>
</body>
</html>


