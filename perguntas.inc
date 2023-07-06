<?php
    $enunciados = [
        "Qual fruto é conhecido no Norte e Nordeste como 'jerimum'?",
        "Qual é o coletivo de cães?",
        "Quem compôs o Hino da Independência?",
        "Qual é o antônimo de 'malograr'?",
        "Em que país nasceu Carmem Miranda?",
    ];

    $alternativas = [
        ["Caju", "Abóbora", "Chuchu", "Côco"],
        ["Matilha", "Rebanho", "Alcateia", "Manada"],
        ["Dom Pedro I", "Manuel Bandeira", "Castro Alvez", "Carlos Gomes"],
        ["Perder", "Fracassar", "Conseguir", "Desprezar"],
        ["Brasil", "Espanha", "Argentina", "Portugal"],
    ];

    $respostas = [1, 0, 0, 2, 3];

    function carregaPergunta($id) {
        global $enunciados;
        global $alternativas;
        
        echo "<h3 class='questao'>" . $enunciados[$id] . "</h3>";
        echo "<div class='options'>";
        for($i = 0; $i < 4; $i++) {
            echo "<input class='op' type='radio' name='resposta' value='". $i ."'> " . $alternativas[$id][$i] . "<br>";
        }
        echo "</div>";
        echo "<button type='submit'>Enviar</button>";
        echo "<p>Acertos: ". $id ."/5 </p>";
    }

    function gameover($id) {
        if ($id == 5) {
            echo "<p>Parabéns!</p> <p>Você Ganhou!</p>";
            echo "<p>Acertos: ". $id ."/5 </p>";
        } else {    
            echo "<p>Você Perdeu!</p>";
            echo "<p>Acertos: ". ($id - 1) ."/5 </p>";
        } 
    }
    
    function verificaResposta($id) {
        global $respostas;
        global $acertos;

        if ($_SERVER["REQUEST_METHOD"] === "POST") {
            if(isset($_POST["resposta"])) {
                $resposta = htmlspecialchars($_POST["resposta"]);
            } else {
                $resposta = "";
            }

            // primeira pergunta ou acertou a anterior
            if($id < 5 && ($resposta == $respostas[$id-1])) {
                carregaPergunta($id);
                $acertos++;
            } else {
                gameover($id);
            }
            
        } else {
            if ($id < 5) {
                carregaPergunta($id);
            } else {
                gameover($id);
            }
        }
    }
?>