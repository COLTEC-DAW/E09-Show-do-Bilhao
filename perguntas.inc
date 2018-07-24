 <?php
  function carregaPergunta($id) {
    $l = "Lorem ipsum dolor sit amet.";
    $enunciados = array($l, $l, $l, $l, $l);
    $alternativas = array(array($l, $l, $l, $l, $l), array($l, $l, $l, $l, $l), array($l, $l, $l, $l, $l), array($l, $l, $l, $l, $l), array($l, $l, $l, $l, $l));
    $enunciado = $enunciados[(int)$id];
    echo "<h3 class=\"text-center p-3\">$id - $enunciado</h3>";
    echo "<form class=\"form-group\" action=\"index.php\" method=\"post\">";
    foreach ($alternativas[(int)$id] as $key => $value) {
      echo "<input type=\"radio\" name=\"alternativas\" value=\"$key\"> $value<br>";
    }
    $id = $id +1;
    echo "<input type=\"hidden\" name=\"posPergunta\" value=\"$id\">";
    echo "<input type=\"submit\" name=\"ChecarResposta\"><br>";
    echo "</form>";
  }
  function carregaResposta($resposta, $pos) {
    $respostas = array(0, 1, 2, 3, 4);
    $pos--;
    if(!($respostas[$pos] == $resposta)){
      header("Location:gameover.php");
      setcookie("ultimaPontuacao", $pos);
    }
    if($pos == 4){
      header("Location:goodgame.php");
      setcookie("ultimaPontuacao", "4");
    }
  }
?>
