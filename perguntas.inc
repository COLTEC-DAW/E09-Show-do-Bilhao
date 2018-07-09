<?php
  function carregaPergunta($id) {
    $l = "Lorem ipsum dolor sit amet.";
    $enunciados = array($l, $l, $l, $l, $l);
    $alternativas = array(array($l, $l, $l, $l, $l), array($l, $l, $l, $l, $l), array($l, $l, $l, $l, $l), array($l, $l, $l, $l, $l), array($l, $l, $l, $l, $l));
    $respostas = array(0, 1, 2, 3, 4);
    if($id != 0) {
      $enunciado = $enunciados[(int)$id-1];
      echo "<h3 id=\"pergunta$id\" class=\"text-center\">$id - $enunciado</h3>";
      foreach ($alternativas[(int)$id-1] as $key => $value) {
        echo "<input type=\"radio\" name=\"alternatias\"> $value<br>";
      }
    }
    if($id == 0) {
      $enunciado = $enunciados[0];
      echo "<h3 id=\"pergunta($id+1)\" class=\"text-center p-3\">1 - $enunciado</h3>";
      echo "<form class=\"form-group\" action=\"index.php\" method=\"post\">";
      foreach ($alternativas[0] as $key => $value) {
        echo "<input type=\"radio\" name=\"alternativas\" value=\"$key\"> $value<br>";
      }
      echo "<input type=\"submit\" name=\"Checar resposta\"><br>";
      echo "</form>";
    }
  }
  function carregaResposta($id) {

  }
?>
