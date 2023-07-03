<?php

    include ("components\footer.inc");
?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/css/style.css">
    <title>Show do Bilhao do Coach</title>
</head>

<body>

    <!--Uso a inclusao pois terei acoes dentro do meu header estilizado-->
    <?php 
        include("./components/header.php");
    ?>

    <div class="main">
        <h2>Bem vindo ao show do Bilhao!!</h2>
            
        <?php
            include ("./data/perguntas.inc.php");

            // Verifica se o parâmetro 'id' foi fornecido na URL
            if (isset($_GET['id'])) {
                $idPergunta = $_GET['id'];

                // Carrega a pergunta com base no ID fornecido
                $pergunta = carregaPergunta($idPergunta);

                // Verifica se a pergunta existe
                if ($pergunta) {
                    $enunciado = $pergunta['enunciado'];
                    $alternativas = $pergunta['alternativas'];

                    echo "<h2>Pergunta " . ($idPergunta + 1) . "</h2>";
                    echo "<p>" . $enunciado . "</p>";

                    // Exibindo as alternativas
                    foreach ($alternativas as $index => $alternativa) {
                        echo "<input type='radio' name='resposta' value='" . $index . "'>";
                        echo "<label>" . $alternativa . "</label><br>";
                    }

                    echo "<br>";
                    echo "<button type='submit'>Enviar Resposta</button>";
                } else {
                    echo "Pergunta não encontrada.";
                }
            } else {
                echo "ID da pergunta não fornecido.";
            }
        ?>

        <br><a href="perguntas.php?id=<?php echo $idPergunta + 1; ?>">Próxima Pergunta</a>

    </div>

    <!--Opto por chamar desse modo ja que será uma simples impressao estilizada sem nenhuma acao-->
    <?php echo getFooter() ?>
</body>

</html>