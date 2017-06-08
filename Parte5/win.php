<!DOCTYPE html>
<html>

    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" ></script>
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

                        echo "<p>Pontuação: ".($_COOKIE['n_id']+1)."</p><br><br>";
                        setcookie("lastpt", ($_COOKIE['n_id']));
                        echo "<br><br><a class='btn btn-primary btn-large' href='perguntas.php?id=0'>Reiniciar</a>";
                        echo "<br><br><a class='btn btn-primary btn-large' href='logout.php'>Logout</a>";
                    ?>
                </div>
            </div>
        </div>

    </body>
</html>