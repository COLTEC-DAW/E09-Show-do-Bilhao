<?php 

    /*---------------   QUESTÃO 1  -----------------*/
    $enunciado[0] = "Há diversas teorias que explicam o surgimento do Sistema Solar. A principal delas é a";

    $alternativas[0][0] = "A - Teoria da Tectônica de Placas";
    $alternativas[0][1] = "B - Teoria da Epistemologia Solar";
    $alternativas[0][2] = "C - Teoria da Deriva Continental";
    $alternativas[0][3] = "D - Teoria da Nebulosa Solar";

    $resposta[0] = 3;

    /*---------------   QUESTÃO 2  -----------------*/

    $enunciado[1] = "Os planetas do Sistema Solar podem ser classificados conforme a sua composição. Com base nessa classificação, pode-se afirmar que são planetas rochosos:";

    $alternativas[1][0] = "A - Terra, Marte, Urano e Netuno.";
    $alternativas[1][1] = "B - Vênus, Marte, Saturno e Urano";
    $alternativas[1][2] = "C - Mercúrio, Vênus, Terra e Marte";
    $alternativas[1][3] = "D - Júpiter, Saturno, Urano e Netuno";

    $resposta[1] = 2;

    /*---------------   QUESTÃO 3  -----------------*/
    $enunciado[2] = "Os planetas gasosos são conhecidos pela sua formação constituída por diversos gases, como hidrogênio, hélio e metano. Os planetas gasosos são:";

    $alternativas[2][0] = "A - Júpiter, Vênus, Terra e Marte.";
    $alternativas[2][1] = "B - Júpiter, Saturno, Urano e Netuno.";
    $alternativas[2][2] = "C - Marte, Saturno, Vênus e Netuno.";
    $alternativas[2][3] = "D - Terra, Mercúrio, Urano e Netuno. ";

    $resposta[2] = 1;

    /*---------------   QUESTÃO 4  -----------------*/

    $enunciado[3] = "O planeta Terra realiza vários movimentos, sendo os dois principais o de rotação, realizado em torno de si mesmo, e o movimento realizado em torno do Sol, sendo corretamente chamado de";
    
    $alternativas[3][0] = "A - Rotação";
    $alternativas[3][1] = "B - Mutação";
    $alternativas[3][2] = "C - Translação";
    $alternativas[3][3] = "D - Transformação";

    $resposta[3] = 2;


     /*---------------   QUESTÃO 5  -----------------*/

     $enunciado[4] = " Nos últimos anos, surgiu nas redes sociais do Brasil um movimento conhecido como terraplanistas, que é formado por um grupo de pessoas que acreditam que a Terra é plana. A refutação a essa ideia pode ser explicada através de qual fenômeno?";

     $alternativas[4][0] = "A - Eclipse";
     $alternativas[4][1] = "B - Maré alta";
     $alternativas[4][2] = "C - Terremoto";
     $alternativas[4][3] = "D - Efeito estufa";
 
     $resposta[4] = 0;

    /* --------------------------------------------------------*/
    //Pega itens da questão de mesmo id e transforma em um vetor
    function carregaQuestoesPHP($id){
        global $enunciado, $alternativas, $resposta;

        foreach($alternativas[$id] as $alternativa){
            $opcoes[] = $alternativa;
        }

        $question = [
            "id" => $id + 1,
            "enunciado" => $enunciado[$id],
            "alternativas" => $opcoes,
            "resposta" => $resposta[$id]
        ];

        return $question;
    }

    /* ----------   Matriz de Questôes para o Json  -----------*/
    global $enunciado;

    foreach($enunciado as $key => $value){
        $perguntas[] = carregaQuestoesPHP($key); 
    }
        
    file_put_contents("./database/question.json", json_encode($perguntas));

    
    /* -----------------------------------------------------*/
    function carregaPergunta($id) {
        $arqJSON = file_get_contents("./database/question.json");
        $perguntas = json_decode($arqJSON);
        
        $array =  array(
            "enunciado" => $perguntas[$id]->enunciado,
            "alternativas" => $perguntas[$id]->alternativas,
            "resposta" => $perguntas[$id]->resposta,
            "id" => $perguntas[$id]->id
        );

        return $array;
    }

?>