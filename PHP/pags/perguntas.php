<?php
include 'autenticacao.php';

$_SESSION['pontuacao'] = 0;

// Função para carregar as perguntas do arquivo perguntas.txt
function carregarPerguntas() {
    // Array para armazenar as perguntas
    $perguntas = array();

    // Lê o conteúdo do arquivo perguntas.txt
    $conteudo = file_get_contents('perguntas.txt');

    // Divide o conteúdo em linhas
    $linhas = explode("\n", $conteudo);

    // Variáveis auxiliares para controlar a leitura das perguntas
    $pergunta = array();
    $alternativas = array();

    // Percorre as linhas
    foreach ($linhas as $linha) {
        $linha = trim($linha);

        // Verifica se a linha é o início de uma nova pergunta
        if (substr($linha, 0, 2) === 'P:') {
            // Armazena a pergunta anterior, se houver
            if (!empty($pergunta)) {
                $pergunta['alternativas'] = $alternativas;
                $perguntas[] = $pergunta;
                $alternativas = array();
            }

            // Cria um novo array para armazenar os dados da nova pergunta
            $pergunta = array();
            $pergunta['enunciado'] = substr($linha, 2);
        }
        // Verifica se a linha é uma alternativa
        elseif (substr($linha, 0, 2) === 'A:') {
            $alternativas[] = substr($linha, 2);
        }
        // Verifica se a linha é a alternativa correta
        elseif (substr($linha, 0, 2) === 'C:') {
            $pergunta['alternativa_correta'] = substr($linha, 2);
        }
    }

    // Armazena a última pergunta
    if (!empty($pergunta)) {
        $pergunta['alternativas'] = $alternativas;
        $perguntas[] = $pergunta;
    }

    return $perguntas;
}

// Carrega as perguntas
$perguntas = carregarPerguntas();

// Define a pergunta atual como a primeira pergunta (índice 0)
$_SESSION['pergunta_atual'] = 0;


// Carrega as perguntas
$perguntas = carregarPerguntas();


// Obtém a pergunta atual
$perguntaAtual = $perguntas[$_SESSION['pergunta_atual']];
$enunciado = $perguntaAtual['enunciado'];
$alternativas = $perguntaAtual['alternativas'];

// Verifica se o formulário foi enviado
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Obtém a alternativa selecionada pelo jogador
    $resposta = $_POST['resposta'];

    // Verifica se a resposta está correta
    if ($resposta === $perguntaAtual['alternativa_correta']) {
        // Incrementa a pontuação do jogador
        $_SESSION['pontuacao']++;

        // Incrementa o índice da pergunta atual
        $_SESSION['pergunta_atual']++;

        // Verifica se todas as perguntas foram respondidas corretamente
        if ($_SESSION['pergunta_atual'] === count($perguntas)) {
            // Todas as perguntas foram respondidas corretamente, redireciona para a página de vitória
            header("Location: vitoria.php");
            exit;
        } else {
            // Obtém a próxima pergunta
            $perguntaAtual = $perguntas[$_SESSION['pergunta_atual']];
            $enunciado = $perguntaAtual['enunciado'];
            $alternativas = $perguntaAtual['alternativas'];
        }
    } else {
        // O jogador respondeu incorretamente, redireciona para a página de game over
        header("Location: gameover.php");
        exit;
    }
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Show do Bilhão - Perguntas</title>
</head>
<body>
    <h1>Show do Bilhão - Perguntas</h1>

    <p>Pergunta <?php echo $_SESSION['pergunta_atual'] + 1; ?>:</p>
    <p><?php echo $enunciado; ?></p>

    <form method="POST" action="perguntas.php">
        <?php foreach ($alternativas as $alternativa): ?>
            <input type="radio" id="<?php echo $alternativa; ?>" name="resposta" value="<?php echo $alternativa; ?>" required>
            <label for="<?php echo $alternativa; ?>"><?php echo $alternativa; ?></label><br>
        <?php endforeach; ?>

        <input type="submit" value="Responder">
    </form>

    <p>Pontuação: <?php echo isset($_SESSION['pontuacao']) ? $_SESSION['pontuacao'] : 0; ?></p>

</body>
</html>
