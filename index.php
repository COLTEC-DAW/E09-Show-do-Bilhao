<?php 
require "perguntas.inc";

?>

<!DOCTYPE html>
<html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Show do Bilhão</title>
    </head>
    <body>


        <?php 
        echo "<h1>Show do Bilhão</h1>";
        
        if(isset($_GET["id"])){
            $id = $_GET['id'];
            $pergunta = carregaPergunta($id);
            
            echo "<p>Pergunta: </p>";

            foreach ($this->alternativas as $indice => $alternativa) {
                echo "<input type='radio' name='resposta_$indice' value='$indice'> $alternativa <br>";
            }

            echo "<form action='' method='POST'>
                A: <input type='radio' name='id'> <br>
            
            </form>";
        }
      ?>
    </body>
    </html>
</html>