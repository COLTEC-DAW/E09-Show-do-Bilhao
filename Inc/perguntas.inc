<?php

    require "./PerguntaClass.php";
    function PegarPerguntaIndividual($id)
{
    $comeco = '<div>';
    $fim = "</div>\n";

    $aux = Pergunta::CarregaPergunta($id);

    $texto = $aux->pegarPergunta();
    $opcoes = $aux->pegarOpcoes();
    $resposta = $aux->pegarResposta();

    $pergunta = $comeco . $texto . "<form action = ./AvaliaResposta.php method = 'post' >" . "</br>";

    $letras = ["A","B","C","D"];

    for($i=0;$i<4;$i++)
    {
        $pergunta = $pergunta . '<input type="radio" name="option" value="'.$i.'"></input> '.$opcoes[$i] . "</br>";
    }

    $pergunta = $pergunta . '<input type = "hidden" name = "id" value = '.$id."> \n"
        . '<input type ="hidden" name = "gabaritoQ" value = '.$resposta."> \n"
        . '<input type ="submit" value="Enviar"> </form>'."\n";

    $pergunta = $pergunta."</br></br>".$fim;

    echo $pergunta;
}

    function PegarPergunta($num)
    {
        $comeco = '<div>';
        $fim = "</div>\n";
        $numQ = $num + 1;

        $pergunta = $comeco ."$numQ) ".$GLOBALS["perguntas"][$num] . "</br>";
        $letras = ["A","B","C","D","E"];

        for($i=0;$i<4;$i++)
        {
            $pergunta = $pergunta .$letras[$i] .")  ".$GLOBALS["respostas"][$num][$i]."</br>";
        }

        $pergunta = $pergunta."A resposta correta para a questão é : ".$letras[$GLOBALS["gabarito"][$num]].")"."</br></br>".$fim;

        return $pergunta;
    }

    function MostrarTodasQuestoes()
    {

        $comeco = '<div>'."\n\n";
        $fim = "</div>\n";
        $PFormatadas = "";
        $aux = 0;

        foreach ($GLOBALS["perguntas"] as $key => $value)
        {
            if($aux == 0)
            {
                $PFormatadas = $PFormatadas.$comeco;
            }

            $PFormatadas = $PFormatadas.PegarPergunta($key);
            $aux++;

        }
        return $PFormatadas . $fim;
    }

?> 