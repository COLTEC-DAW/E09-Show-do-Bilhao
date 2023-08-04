<?php

$pontuacao = $_COOKIE['pontuacao_' . $_SESSION['user']->obter_login()];
$num       = $pontuacao + 1;
$pergunta  = new Gerenciador_de_Pergunta();
$perguntas = fopen('perguntas.txt', 'r');

for($p = 0; $p < $num; $p++)
{
  $pergunta->setFromJSON(fgets($perguntas));
        
  if(feof($perguntas))
    break;
}

fclose($perguntas);
$enunciado = $pergunta->obter_enunciado();
$resposta  = $pergunta->obter_res_correta();
echo "<hr>";
echo "<p>Pontuacao: $pontuacao</p><br>";
echo "<form action='correcao.php' method='POST'>";
echo "<fieldset>";
echo "<legend>Pergunta nº $num</legend>";
echo "<label for='alternativa'>$enunciado</label><br>";

foreach($pergunta->obter_alternativas() as $alternativa => $texto)
{
  echo "<input type='radio' name='alternativa' value=$alternativa>$texto</input><br>";
}

echo "<input type='hidden' id='resposta' name='resposta' value=$resposta><br>";
echo "<input type='submit' value='Responder' />";
echo "</fieldset>";
echo "</form>";
echo "<hr>";

?>
