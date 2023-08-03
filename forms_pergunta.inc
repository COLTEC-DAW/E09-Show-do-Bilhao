<form action='correcao.php' method='POST'>
    <fieldset>

<?php

$num       = $_GET['pergunta'];
$pergunta  = new Gerenciador_de_Pergunta();
$perguntas = fopen('perguntas.txt', 'r');

for($p = 0; $p < $num; $p++)
{
  $pergunta->setFromJSON(fgets($perguntas));
        
  if(feof($perguntas))
    break;
}

fclose($perguntas);
$n_mostrar = $num + 1;
$enunciado = $pergunta->obter_enunciado();
$resposta  = $pergunta->obter_res_correta();

echo "<legend>Pergunta nº $n_mostrar</legend>";
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
