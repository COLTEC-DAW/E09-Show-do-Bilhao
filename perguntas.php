<?php
require 'perguntas.inc';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Verifica se a resposta está correta
    $resposta = $_POST['resposta'];
    $id = $_POST['id'];
    $questaoAtual = $perguntas[$id];

    if ($resposta === $questaoAtual->questaocerta) {
        // A resposta está correta, avança para a próxima pergunta
        $id = isset($_POST['id']) ? $_POST['id'] + 1 : $id + 1;
        if ($id <= count($perguntas)) {
            $pergunta_atual = $perguntas[$id];
        } else {
            $id = count($perguntas);
            $pergunta_atual = "Fim das perguntas.";
        }
    } else {
        // A resposta está incorreta, exibe a tela de fim de jogo
        echo "Fim do jogo. Sua resposta está incorreta.";
        exit; // Termina o script para evitar a exibição do restante da página
    }
} else {
    $id = isset($_GET['id']) ? $_GET['id'] : 1;
}

if ($id <= count($perguntas)) {
    $pergunta_atual = $perguntas[$id];
} else {
    $id = count($perguntas);
    $pergunta_atual = "Fim das perguntas.";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jogo do bilhão</title>
</head>
<body>
    <h1>Pergunta <?php echo $id; ?></h1>
    <p><?php $pergunta_atual->enunciado($id); ?></p>
   
    <?php if ($id <= count($perguntas)): ?>
        <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
            <?php foreach ($pergunta_atual->questões as $questao): ?>
                <input type="radio" name="resposta" value="<?php echo $questao; ?>">
                <label><?php echo $questao; ?></label>
                <br>
            <?php endforeach; ?>

            <input type="submit" value="Enviar">
            <input type="hidden" name="id" value="<?php echo $id; ?>">
        </form>
    <?php endif; ?>

    <?php include 'rodape.inc'; ?> 
</body>
</html>