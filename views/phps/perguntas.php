<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="views/stylish/stilo.css">
    <title>Document</title>
</head>
<body>
    <?php 
    
        include "../incs/menu.inc";

        require "../incs/perguntas.inc";
    ?>

    <form action="perguntas.php" method="post">

        <?php
            session_start();
            if (!isset($_SESSION['respostas'])) {
                $_SESSION['respostas'] = array();
            }
    
            $pergunta_id = isset($_POST['next_id']) ? (int)$_POST['next_id'] : 0;

            $question = new Perguntas($pergunta_id);

            if (isset($_POST['alternativa'])) {
                $resposta = $_POST['alternativa'];
                $_SESSION['respostas'][$pergunta_id] = $resposta;
                $proxima_pergunta_id = $pergunta_id + 1;
                $proxima_pergunta = new Perguntas($proxima_pergunta_id);
                
                if ($resposta == $question->$resposta_correta)
                    require "perguntas.php?next+id=$proxima_pergunta_id";
                else
                    require "game-over.php";
                exit;
            }

            echo "Pergunta " . ($pergunta_id + 1) . ": " . $question->enunciado;
            echo '<input type="hidden" name="next_id" value="'. $pergunta_id .'">';
            foreach ($question->alternativas as $alternativa) {
                echo "<br>";
                echo "<label><input type='radio' name='alternativa' id='key' value='" . $alternativa . "' onclick='enableSubmitButton()'>" . $alternativa . "</label>";
            }
            echo "<br>";
            
            echo "<input type='submit' value='submit' id='submitBtn' disabled>";
        ?>

        <script>
            // Função para habilitar o botão de envio quando uma alternativa for selecionada
            function enableSubmitButton() {
                var submitBtn = document.getElementById('submitBtn');
                submitBtn.disabled = false;
            }
        </script>

    </form>

    <?php include "../incs/rodape.inc"; ?>

</body>
</html>
