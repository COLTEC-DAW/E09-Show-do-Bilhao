<?php
  function carregaPergunta($id) {
    $l = "Lorem ipsum dolor sit amet.";
    $enunciados = array($l, $l, $l, $l, $l);
    $alternativas = array(array($l, $l, $l, $l, $l), array($l, $l, $l, $l, $l), array($l, $l, $l, $l, $l), array($l, $l, $l, $l, $l), array($l, $l, $l, $l, $l));
    $respostas = array(0, 1, 2, 3, 4);
    if($id != 0) {
      $enunciado = $enunciados[(int)$id-1];
      echo "<h3 class=\"text-center\">$id - $enunciado</h3>";
      foreach ($alternativas[(int)$id-1] as $key => $value) {
        echo "<input type=\"radio\" name=\"alternatias\"> $value<br>";
      }
    }
  }
?>
