<hr>
<form action='correcao.php' method='POST'>
    <fieldset>

<?php

$num       = $_COOKIE['pontuacao_' . $_SESSION['user']->obter_login()] + 1;
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

echo "<legend>Pergunta nº $num</legend>";
echo "<label for='alternativa'>$enunciado</label><br>";

foreach($pergunta->obter_alternativas() as $alternativa => $texto)
{
  echo "<input type='radio' name='alternativa' value=$alternativa>$texto</input><br>";
}

echo "<input type='hidden' id='resposta' name='resposta' value=$resposta><br>";

?>

        <input type='submit' value='Responder' />
    </fieldset>
</form>
<hr>