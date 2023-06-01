<?php
include 'perguntas.inc';
?>

<!DOCTYPE html>
<html>
<head>
    <title>Perguntas</title>
</head>
<body>

<?php include 'menu.inc'; ?>

<h1>Pergunta</h1>

<?php
// Inicializa o buffer de respostas
session_start();
if (!isset($_SESSION['respostas'])) {
    $_SESSION['respostas'] = array();
}

// Verificar se o parâmetro 'id' está presente na URL
if (isset($_GET['id'])) {
    $pergunta_id = $_GET['id'];
    $pergunta = carregaPergunta($pergunta_id);

    if ($pergunta !== null) {
        echo "<p><strong>Pergunta:</strong> " . $pergunta['enunciado'] . "</p>";

        echo "<form method='post' action='perguntas.php?id=" . ($pergunta_id) . "'>";
        echo "<input type='hidden' name='pergunta_id' value='" . $pergunta_id . "'>";

        foreach ($pergunta['alternativas'] as $indice => $alternativa) {
            echo "<label><input type='radio' name='resposta' value='" . $indice . "'>" . $alternativa . "</label><br>";
        }

        echo "<button type='submit' name='submit'>Responder</button>";
        echo "</form>";

        // Processa a resposta quando o formulário for enviado
        // Processa a resposta quando o formulário for enviado
        if (isset($_POST['submit'])) {
            $resposta_selecionada = $_POST['resposta'];

            // Salva a resposta no buffer
            $_SESSION['respostas'][$pergunta_id] = $resposta_selecionada;

            // Verifica se todas as perguntas foram respondidas
            if ($pergunta_id < count($pergunta)) {
                // Redireciona para a próxima pergunta
                header("Location: perguntas.php?id=" . ($pergunta_id + 1));
                exit;
            } else {
                // Prepara os dados para envio à página verifica_resposta.php
                $dados_respostas = http_build_query($_SESSION['respostas']);

                // Redireciona para a página de verificação de respostas
                header("Location: verifica_resposta.php?" . $dados_respostas);
                exit;
            }
        }

    } else {
        header("Location: verifica_resposta.php");
    }
} else {
    echo "<p>Nenhuma pergunta selecionada.</p>";
}

?>

<?php include 'rodape.inc'; ?>

</body>
</html>
