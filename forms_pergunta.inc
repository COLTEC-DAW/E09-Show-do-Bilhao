<form action='correcao.php' method='POST'>
    <fieldset>

<?php

$num       = $_GET['pergunta'];
$pergunta  = new Gerenciador_de_Pergunta();
$perguntas = fopen('perguntas.json', 'r');

for($p = 0; $p < $num; $p++)
{
  $pergunta->setFromJSON(fgets($perguntas));
        
  if(feof($usuarios))
    break;
}

fclose($perguntas);
$n_mostrar = $num + 1;
$enunciado = $pergunta->obter_enunciado();

echo "<legend>Pergunta nº $n_mostrar</legend>";
echo "<label for='pergunta'>$enunciado</label><br>";

foreach($pergunta->obter_alternativas() as $alternativa)
{
  echo "<input type='radio' name='pergunta'>$alternativa</input><br>";
}

?>

        <input type='submit' value='Responder' />
    </fieldset>
</form>
