<!DOCTYPE html>
<html>

    <head>
        <meta charset="UTF-8">
        <title>O Show do Bilhão</title>
    </head>

    <body>
        
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    
                    <h2>O Show do Bilhão!</h2>
                    </br>
                    <p>Voce ganhou!</p>
                    <?php
                        require 'perguntas.inc';
                        $pontuacao = $_POST['ident'];
                        echo "<p>Pontuação: ".$_COOKIE['id']."</p>";
                    ?>
                </div>
            </div>
        </div>

    </body>
</html>