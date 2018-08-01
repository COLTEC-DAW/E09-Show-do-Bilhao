<?php

    $enunciados = [
        "Quem traiu a cantora brasileira Joelma?",
        "Na frase 'sabe de nada' do grande pensador contemporâneo Compadre Washington, o sujeito é:",
        "Quem vai ganhar a Copa do Mundo 2018?",
        "Um carro foda X Celta 2012, os dois a 80km, um fica do lado do outro?",
        "Quem é o melhor rapper da atualidade?"
    ];

    $alternativas = [
        $enunciados[0] => [
            "A lua",
            "O chimbinha",
            "A lua e o chimbinha",
            "Willian Bonner"
        ],
        $enunciados[1] => [
            "Simples",
            "Indeterminado",
            "Oculto",
            "Inocente"
        ],
        $enunciados[2] => [
            "França",
            "Brasil",
            "Bélgica",
            "Fagner"
        ],
        $enunciados[3] => [
            "Creio que não",
            "Claro",
            "Sim, 80km é 80km",
            "Menino Ney"
        ],
        $enunciados[4] => [
            "Drake (humildão)",
            "Eminem",
            "xxxtentação deus do rap (RIP)",
            "Post Malone"
        ]
    ];

function carregaPergunta($id, $prova) {
        global $enunciados, $alternativas;



        if ($prova == false) {
            echo "<progress class='progress is-success' value='$id' max='5'>" . $id*20 . "</progress>";
        }
        echo "<article class='message is-6'>
        <div class='message-header'>
            <p>
                <b name='num'> $id </b> - 
                $enunciados[$id] 
            </p>
        </div>";

        echo "<div class='message-body'>";

        foreach($alternativas[$enunciados[$id]] as $alternativa) {
            echo "<input type='radio' name='$enunciados[$id]' class='resposta'>
                    <span class='checkmark'>" . 
                        $alternativa . 
                    "</span> <br>";
        }

        echo "</div>
        </article>";
}

function verificaResposta() {

}

?>