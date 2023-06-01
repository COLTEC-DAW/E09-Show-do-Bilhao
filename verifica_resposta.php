<?php
include 'perguntas.inc';
?>

<!DOCTYPE html>
<html>
<head>
    <title>Verifica Resposta</title>
</head>
<body>

<?php include 'menu.inc'; ?>

<h1>Verifica Resposta</h1>

<?php
    // Inicializa o buffer de respostas
    session_start();
    if (!isset($_SESSION['respostas'])) {
        $_SESSION['respostas'] = array();
    }

    // Verifica se há valores na string de consulta da URL
    if (!empty($_SERVER['QUERY_STRING'])) {
        // Obtém a string de consulta da URL
        $query_string = $_SERVER['QUERY_STRING'];

        // Analisa a string de consulta e armazena os valores no array $_SESSION['respostas']
        parse_str($query_string, $_SESSION['respostas']);
    }

    // Agora você pode acessar os valores das respostas usando o array $_SESSION['respostas']
    // Por exemplo, para exibir as respostas:
    foreach ($_SESSION['respostas'] as $pergunta_atual => $resposta) {
        echo "Pergunta #" . $pergunta_atual . " - Resposta: " . $resposta . "<br>";
    }

    $perguntas_acertadas = 0;

    if (isset($_SESSION['pergunta_atual'])) {
        $pergunta_atual = $_SESSION['pergunta_atual'];
    } else {
        $pergunta_atual = 0;
    }

    $pergunta = carregaPergunta($pergunta_atual);

    if ($pergunta !== null) {
        echo "<p><strong>Pergunta:</strong> " . $pergunta['enunciado'] . "</p>";

        // Verificar se a resposta foi fornecida pelo usuário
        if (isset($_SESSION['respostas'][$pergunta_atual])) {
            $resposta_selecionada = $_SESSION['respostas'][$pergunta_atual];

            echo "<p><strong>Sua resposta:</strong> " . $pergunta['alternativas'][$resposta_selecionada] . "</p>";

            // Verificar se a resposta está correta
            if ($resposta_selecionada == $pergunta['resposta_correta']) {
                echo "<p>Resposta correta!</p>";
                $perguntas_acertadas++;
            } else {
                echo "<p>Resposta incorreta!</p>";
                // Exibir a alternativa correta
                echo "<p><strong>Alternativa correta:</strong> " . $pergunta['alternativas'][$pergunta['resposta_correta']] . "</p>";
            }
        } else {
            echo "<p>Você não respondeu esta pergunta.</p>";
        }

        // Todas as perguntas foram respondidas
        echo "<h2>Final do jogo</h2>";
        echo "<p>Quantidade de perguntas acertadas: " . $perguntas_acertadas . "</p>";
        if($perguntas_acertadas != count($enunciados)){
            echo "<h3>Respostas corretas:</h3>";

            // Exibir as alternativas corretas de todas as perguntas
            foreach ($_SESSION['respostas'] as $pergunta_atual => $resposta_selecionada) {
                $pergunta = carregaPergunta($pergunta_atual);
                echo "<p><strong>Pergunta:</strong> " . $pergunta['enunciado'] . "</p>";
                echo "<p><strong>Resposta correta:</strong> " . $pergunta['alternativas'][$pergunta['resposta_correta']] . "</p>";
            }
        }
        else {
            echo "<p><strong>Parabéns, vc acertou tudo!</strong></p>";
        }

        // Limpar o buffer de respostas
        unset($_SESSION['respostas']);
    }
?>

<?php include 'rodape.inc'; ?>

</body>
</html>
