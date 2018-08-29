 <?php
  function carregaPergunta($pos) {
    $json = file_get_contents('perguntas.json');
    $json_data = json_decode($json, true);
    $pergunta = $json_data[$pos];
    $enunciado = $pergunta["enunciado"];
    $alternativas = array($pergunta["alternativa0"], $pergunta["alternativa1"], $pergunta["alternativa2"], $pergunta["alternativa3"], $pergunta["alternativa4"]);
    echo "<h3 class=\"text-center p-3\">$pos - $enunciado</h3>";
    echo "<form class=\"form-group\" action=\"index.php\" method=\"post\">";
    foreach ($alternativas as $key => $value) {
      echo "<input type=\"radio\" name=\"alternativas\" value=\"$key\"> $value<br>";
    }
    $pos = $pos +1;
    echo "<input type=\"hidden\" name=\"posPergunta\" value=\"$pos\">";
    echo "<input type=\"submit\" name=\"ChecarResposta\"><br>";
    echo "</form>";
  }
  function carregaResposta($respostaCheck, $pos) {
    $pos--;
    $json = file_get_contents('perguntas.json');
    $json_data = json_decode($json, true);
    $pergunta = $json_data[$pos];
    $resposta = $pergunta["resposta"];
    if(!($resposta == $respostaCheck)){
      header("Location:gameover.php");
      setcookie("ultimaPontuacao", $pos);
      exit();
    }
    if($pos == 4){
      header("Location:goodgame.php");
      setcookie("ultimaPontuacao", "4");
      exit();
    }
  }
?>
