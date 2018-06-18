<?php
    $perguntas = array(
        "Qual a Capital da Belgica?",
        "Quem jogou mais na copa de 1958?",
        "Qual o primeiro nome do Ayrton Senna?",
        "Normalmente, quantos litros de sangue uma pessoa tem?",
        "Quanto tempo a luz do Sol demora para chegar à Terra?"
    );

    $alternativas = [
        ["Brasilia.","Tokyo.","Bruxelas.","Buenos Aires."],
        ["Garrincha.", "Pelé.", "Dida.", "Zagallo."],
        ["Bob.","João.","Ayrton.","Fernando."],
        ["Menos que 1","Mais que 10.","Entre 7 a 8 litros.","Entre 4 a 6 litros."],
        ["12 minutos.", "1 dia.", "12 horas.", "8 minutos."],
    ];
    $respostas = array(
        "Bruxelas.",
        "Pelé.",
        "Ayrton.",
        "Entre 4 a 6 litros.",
        "8 minutos."
    );

    function carregaPergunta($id){
        global $perguntas;
        global $alternativas;
        return [$perguntas[$id], $alternativas[$id]];
    }

    function verificaPergunta($id, $alternativa){
        global $respostas;
        $query = 'Location: /gameover.php?score=' . ($id-1);
        if($respostas[$id-1]!=$alternativa){
            header($query);
        }
    }
?>