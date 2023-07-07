<?php
    include 'menu.inc'; // Importa o arquivo do menu
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- CSS -->
  <link rel="stylesheet" href="gameover.css" />

  <title>Game Over</title>
</head>

<body>

  <!-- Conteúdo da página de game over -->
  <div class="container">
    <h1>Game Over</h1>
    <p>Infelizmente, você errou uma resposta e o jogo acabou.</p>
    <p>Melhor sorte da próxima vez!</p>
    <button><a href="./index.php">Voltar para o menu</a></button>
  </div>

  <?php include 'rodape.inc'; ?>
</body>

</html>