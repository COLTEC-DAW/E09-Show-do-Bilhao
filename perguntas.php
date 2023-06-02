<?php
include 'perguntas.inc';
?>

<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Perguntas</title>
    <style>
    body, li, ul, p{
        margin: 0px;
        padding: 0px;
        list-style: none;
        font-size: 1.2em;
        font-family: Calibri, sans-serif;
    } 
    .container {
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        height: 100vh;
    }
    .container p{
        margin-bottom: 20px;
    }

    input[type="radio"] {
        appearance: none;
        -moz-appearance: none;
        -webkit-appearance: none;
        width: 16px;
        height: 16px;
        border-radius: 50%;
        border: 2px solid #999;
        outline: none;
        margin-right: 6px;
        position: relative;
        top: 3px;
    }

    input[type="radio"]:checked {
        background-color: orange;
    }
    
    button {
        margin-top: 25px;
        font-size: 1.2em;
        border-radius: 15px;
        padding: 10px 20px;
        background: #ddd;
        border: 1px solid grey;
        width: 100%;
        color: black;
        border: none;
        cursor: pointer;
    }

    button:hover{
        background: orange;
    }

    .alternativa{
        font-size: 1.2em;
        border-radius: 15px;
        padding: 10px;
        background: #ddd;
        color: black;
        margin: 10px 10px 10px 0;
        width: 50%;
        float: left;
        box-sizing: border-box;
    }
    .clearfix::after {
        content: "";
        display: table;
        clear: both;
    }
    </style>
</head>
<body>

<?php include 'menu.inc'; ?>

<div class="container">
<h1>Show do Bilhão</h1>

<div class="form">
<?php
// Inicializa o buffer de respostas
session_start();
if (!isset($_SESSION['respostas'])) {
    $_SESSION['respostas'] = array();
}

$pergunta_id = 0;

// Verificar se o parâmetro 'id' está presente na URL
if (isset($_GET['id'])) {
    $pergunta_id = $_GET['id'];
    $pergunta = carregaPergunta($pergunta_id);

    if ($pergunta !== null) {
        echo "<p><strong>Pergunta:</strong> " . $pergunta['enunciado'] . "</p>";

        echo "<form method='post' action='perguntas.php?id=" . ($pergunta_id) . "'>";
        echo "<input type='hidden' name='pergunta_id' value='" . $pergunta_id . "'>";

        foreach ($pergunta['alternativas'] as $indice => $alternativa) {
            echo "<label class='alternativa'><input type='radio' name='resposta' value='" . $indice . "'>" . $alternativa . "</label><br>";
        }

        echo "<div class='clearfix'></div>";
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
</div>
</div>

<?php include 'rodape.inc'; ?>

</body>
</html>
