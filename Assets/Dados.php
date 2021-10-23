<?php

    include "./Assets/Session.php";
    include "./Assets/PerguntaClasse.php";

    function PegarPerguntaIndividual($id)
{
    $comeco = '<div>';
    $fim = "</div>\n";

    $aux = Pergunta::CarregaPergunta($id);

    $texto = $aux->pegarPergunta();
    $opcoes = $aux->pegarOpcoes();
    $resposta = $aux->pegarResposta();

    $pergunta = $comeco . $texto . "<form action = ./Assets/AvaliaResposta.php method = 'post' >" . "</br>";

    $letras = ["A","B","C","D","E"];

    for($i=0;$i<5;$i++)
    {
        $pergunta = $pergunta . '<input type="radio" name="option" value="'.$i.'"></input> '.$opcoes[$i] . "</br>";
    }

    $pergunta = $pergunta . '<input type = "hidden" name = "id" value = '.$id."> \n"
        . '<input type ="hidden" name = "gabaritoQ" value = '.$resposta."> \n"
        . '<input type ="submit" value="Enviar"> </form>'."\n";

    $pergunta = $pergunta."</br></br>".$fim;

    echo $pergunta;
}
?>