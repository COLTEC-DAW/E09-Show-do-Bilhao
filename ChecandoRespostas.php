<?php 
  $resposta = $_POST['resposta'];
  $perguntaAtual = $_POST['pergunta'];
  $alternativaCorreta = $_POST['respostascorretas'];
  if(($perguntaAtual == 4) && ($resposta == $alternativaCorreta) ){
      header("Location: http://localhost/E09-Show-do-Bilhao-guilherme-lorrayne/Ganhou.php"); 
  }
  else if($resposta == $alternativaCorreta){
      header("Location: http://localhost/E09-Show-do-Bilhao-guilherme-lorrayne/perguntas.php?id=".($perguntaAtual+1)."");
  }
  else{
      header("Location: http://localhost/E09-Show-do-Bilhao-guilherme-lorrayne/GameOver.php");
  }
?>