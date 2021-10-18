<!-- obtenção de dados-->
<?php 
    include 'dados.php';
    include 'perguntas.inc'
?>
<!-- obtém o índex do jogo atual e verifica se é válido-->
<?php
  $questAtual = htmlspecialchars($_POST['questAtual']);
?>

<!-- cata a pergunta e as alternativas do jogo atual-->
<?php
    $alternativas = $GLOBALS['alternativas'][$questAtual];
    $pergunta = $GLOBALS['perguntas'][$questAtual];
    $resposta = $GLOBALS['respostas'][$questAtual];
?>
<!-- envia a resposta selecionada e o índex do próximo jogo para esta mesma página-->
<form method="post" action="validaResposta.php">
    <!-- mostra a questao atual-->
    <?php echo controleDasQuestoes($questAtual);?>
    <?php echo $pergunta?><br>
    <!-- envia sob click a escolha do usuário-->                              
    <input type="radio" name="resposta" value="0" onchange="this.form.submit()">
    <!-- mostra para o usuário a alternativa-->
    <?php echo $alternativas[0]?><br>
    <input type="radio" name="resposta" value="1" onchange="this.form.submit()"><?php echo $alternativas[1]?><br>
    <input type="radio" name="resposta" value="2" onchange="this.form.submit()"><?php echo $alternativas[2]?><br>
    <input type="radio" name="resposta" value="3" onchange="this.form.submit()"><?php echo $alternativas[3]?><br>
    <!-- envia via post o índex do próximo jogo-->
    <input type="hidden" name="questAtual" value="<?php echo ++$questAtual?>">
    <input type="hidden" name="respostaCorreta" value="<?php echo $resposta?>">
</form>