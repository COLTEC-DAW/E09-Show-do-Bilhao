<?php

    $perguntas = [
        "As árvores que não perdem suas folhas no outono, são também chamadas de:",
        "Qual desses ingredientes não é usado no preparo do pavê?",
        "O que é um Cartoon",
        "Quem nasce no Estado do Rio de Janeiro é:" ];
    $respostas = array(
         array("Viçosas","Floridas","Sempre-Verdes","Nativas"),
         array("Bolacha", "Manteiga", "Gemas", "Pimenta"),
         array("Desenho Animado", "Livro Antigo", "Livro de Receitas", "Carta Geográfica"),
         array("Fluminense", "Paulistano", "Sergipano", "Gaúcho"));

    $respostascorretas = [2,3,0,0];
    $keys = array_keys($respostas);

function carregaPergunta($id){
      global $perguntas, $respostas, $respostascorretas;
      echo $perguntas[$id]."<br><br>";
        /*foreach ($respostas[$keys[$chave]] as $alternativa) {
           echo "<li>$alternativa</li>";
        }*/
        $increment = 0;
         foreach($respostas[$id] as $elemento)
        {
            if($increment == $respostascorretas[$id])
            {
                echo $elemento."<br>";
                $increment++;
            }
            else
            {
                echo $elemento."<br>";
                $increment++;
            }
        }
        echo "<br>";

}

?>