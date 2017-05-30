<!DOCTYPE html>
<html>

    <head>
        <meta charset="utf-8">
        <title>O Show do Bilhão</title>
    </head>

    <body>
        
        <?php 
            require 'perguntas.inc';

            $id = $_GET["id"];
            carregaPergunta($id);
            $id++;

            if($id < 6){
                echo "<a class='btn btn-primary btn-large' href='perguntas.php?id=" . $id . "'" . ">Próximo</a>" . "<br>" . "<br>";
            }
            else{
                echo "<h3>Jogo terminado!</h3>" . "<br>" . "<br>";
            }

            require 'rodape.inc';            

        ?>



    </body>
</html>