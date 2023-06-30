<?php
    //chama o arquivo perguntas.inc e o menu.inc, so roda o site se ele existir 
    require 'perguntas.inc';
    require 'menu.inc';
    //pega o id e armazena ele na posição id, isset verficia se o ide existe, e se ele existir retorna true, e o id é pego e armazenado em id, caso issso não aconteça ele armazena 1
    $id = isset($_GET['id']) ? $_GET['id'] : 1;
    //carrega as perguntas e usa essa função presente em perguntas .inc
   //$pergunta=carregaPergunta($id,$perguntas);

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
   
       <?php if ($id < count($perguntas)): ?>
        <form method="POST" action="perguntas.php">
    <?php foreach ($pergunta_atual->questões as $questao): ?>
        <input type="radio" name="resposta" value="<?php echo $questao; ?>">
        <label><?php echo $questao; ?></label>
        <br>
    <?php endforeach; ?>

    <input type="submit" value="Enviar " >
    </form>
       <?php endif; ?>
   
       <script>
           function proximaPergunta(id) {
               id = id + 1;
               window.location.href = 'perguntas.php?id=' + id;
           }
       </script>
   </body>
   </html>
   <?php
    //iprime as perguntas
   // if ($pergunta) {
     //   $pergunta->MostraQuestões($id);
  //  } else {
       // echo "Pergunta não encontrada.";
   // }

    //chama o arquivo, mas se ele não existir o código roda independentemente
    include 'rodape.inc';

    ?>  
</body>
</html>