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
                    <?php
                        session_start();
                        if(!isset($_SESSION["login"]) && !isset($_SESSION["senha"])){
                            echo "<a class='btn btn-primary btn-large' href='login.php'>Iniciar</a>";
                        }
                        else{
                            echo "<a class='btn btn-primary btn-large' href='perguntas.php?id=".($_COOKIE['n_id'])."'>Continuar</a>";
                            echo "<br><br><a class='btn btn-primary btn-large' href='logout.php'>Logout</a>";

                        }
                    ?>
                </div>
            </div>
        </div>

    </body>
</html>