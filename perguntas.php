<?php
session_start(); // Inicia a sessão

// Verifica se o jogador está autenticado
if (!isset($_SESSION['autenticado']) || $_SESSION['autenticado'] !== true) {
    // Redireciona para o arquivo "index.php" se o jogador não estiver autenticado
    header("Location: index.php");
    exit;
}

include 'pergunta.inc'; // Importa o arquivo da pergunta
include 'perguntas.inc'; // Importa o arquivo da pergunta

// Verifica se o índice da pergunta foi fornecido
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $pergunta = carregaPergunta($id);

    if ($pergunta) {
        // Verifica se o formulário foi enviado
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            // Verifica a resposta enviada pelo usuário
            $respostaUsuario = $_POST['resposta'];
            $respostaCorreta = $pergunta['resposta_correta'];

            if ($respostaUsuario == $respostaCorreta) {
                $player = unserialize($_SESSION['usuario']);
                
                echo "<p>Resposta correta!</p>";

                // Verifica se é a última pergunta
                $_SESSION['pontuacao']++;

                if ($id < count($enunciados) - 1) {
                    // Exibe botão para a próxima pergunta
                    setcookie($player->login . "-ultima_vez_jogou", date('d/M/Y'));
                    setcookie($player->login . '-ultima_pontuacao', $_SESSION['pontuacao']);
                    $proximaPergunta = $id + 1;
                    echo "<a href='perguntas.php?id=" . $proximaPergunta . "'>Próxima pergunta</a>";
                    exit;
                } else {
                    setcookie($player->login . "-ultima_vez_jogou", date('d/M/Y'));
                    setcookie($player->login . '-ultima_pontuacao', $_SESSION['pontuacao']);
                    // Exibe mensagem de vitória
                    echo "<p>Parabéns, você venceu o jogo!</p>";
                    echo "<button><a href='./index.php'>Voltar ao menu</a></button>";
                    exit;
                }
            } else {
                // Redireciona para a página de game over
                $player = unserialize($_SESSION['usuario']);
                setcookie($player->login . "-ultima_vez_jogou", date('d/M/Y'));
                setcookie($player->login . '-ultima_pontuacao', $_SESSION['pontuacao']);
                header("Location: gameover.php");
                exit;
            }
        }

        // Exibe a pergunta e as alternativas
        echo "<h2>Pergunta " . ($id + 1) . ":</h2>";
        echo "<h3>" . $pergunta['enunciado'] . "</h3>";

        // Exibe o formulário para o usuário selecionar a resposta
        echo "<form method='post' action='perguntas.php?id=" . $id . "'>";
        foreach ($pergunta['alternativas'] as $i => $alternativa) {
            echo "<input type='radio' name='resposta' value='" . $i . "'> " . $alternativa . "<br>";
        }
        echo "<br>";
        echo "<input type='submit' value='Responder'>";
        echo "</form>";
    } else {
        echo "<p>Pergunta não encontrada.</p>";
    }
} else {
    // Se nenhum índice de pergunta foi fornecido, exibe a primeira pergunta
    header("Location: perguntas.php?id=0");
    exit;
}
?>
