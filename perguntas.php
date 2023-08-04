<!-- php responsavel pelo gerenciamento da pagina -->
<?php

include("menu.inc");
require("cria_questao.php");

session_start();

if(!isset($_SESSION['Usuarios']))
{
  header("Location: index.php");
}

$id = htmlspecialchars($_GET["id"]);
$questao = carregaPergunta($id, "perguntas.json");

$respostaCorreta = htmlspecialchars($_POST["respostaCorreta"]);
$respostaInserida = htmlspecialchars($_POST["questao"]);
$saldoAcertos = ($id);

if (trim($respostaInserida) != trim($respostaCorreta)) {
  header("Location: game_over.php?saldoAcertos=" . ($saldoAcertos - 1));
}

if ($questao->question == null) {
  setcookie('ultima_pontuacao', $saldoAcertos);
  setcookie('ultima_acesso', date('d-m-Y H:i:s'));
  echo "Fim, voce ganhou!";
  echo "
      <form action='perguntas.php' method='GET'>
          <input type='submit' value='Jogar novamente'>
          <input type='hidden' name='id' value='0'>
      </form>
    ";
  echo "
      <form action='login.php' method='POST'>
          <input type='submit' name='logOut' id='logOut' value='Sair'>
      </form>
    ";
  include("rodape.inc");
  return;
}
?>

<!-- Definicoes de cabecalho da pagina -->
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Questões</title>
</head>

<!-- Imprime o formulario de questoes -->

<body>
  <form action="perguntas.php?id=<?= $id + 1 ?>" method="POST">
    <fieldset>
      <p>
        <label><?= $questao->question ?></label>
      </p>
      <p>
        <input type="radio" name="questao" id="opcao_1" value="0">
        <label for="opcao_1"><?= $questao->options[0] ?></label>
      </p>
      <p>
        <input type="radio" name="questao" id="opcao_2" value="1">
        <label for="opcao_2"><?= $questao->options[1] ?></label>
      </p>
      <p>
        <input type="radio" name="questao" id="opcao_3" value="2">
        <label for="opcao_3"><?= $questao->options[2] ?></label>
      </p>
      <p>
        <input type="radio" name="questao" id="opcao_4" value="3">
        <label for="opcao_4"><?= $questao->options[3] ?></label>
      </p>
      <input type="hidden" name="respostaCorreta" id="respostaCorreta" value=<?= $questao->answer ?>>
      <input type="submit" name="Enviar" id="enviar" value="enviar">
    </fieldset>
  </form>

  <!-- Imprime o numero de acertos atual -->
  <p> Numero de acertos:
    <?= ($saldoAcertos) ?>
  </p>


  <?php include("rodape.inc"); ?>
</body>

</html>