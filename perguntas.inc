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
    $acertos = 0; 

    function carregaPergunta($id) {
        global $enunciados;
        global $alternativas;
        
        echo "<h3>" . $enunciados[$id] . "</h3>";
        
        for($i = 0; $i < 4; $i++) {
            echo "<input type='radio' name='resposta' value='". $i ."'> " . $alternativas[$id][$i] . "<br>";
        }
        echo "<button type='submit'>Enviar</button>";
        echo "<p>Acertos: ". $id ."/5 </p>";
    }

    function gameover() {
        global $acertos;

        if ($acertos == 5) {
            echo "<p>Parabéns!</p> <p>Você Ganhou!</p>";
        } else {
            echo "<p>Você Perdeu!</p>";
        }
        echo "<p>Acertos: ". $acertos ."/5 </p>";
    }
    
    function verificaResposta($id) {
        global $respostas;
        global $acertos;

        if ($_SERVER["REQUEST_METHOD"] === "POST") {
            $resposta = htmlspecialchars($_POST["resposta"]);

            // primeira pergunta ou acertou a anterior
            if($id < 5 && ($resposta == $respostas[$id-1])) {
                carregaPergunta($id);
                $acertos++;
            } else {
                gameover();
            }
            

        } else {
            if ($id < 5) {
                carregaPergunta($id);
            } else {
                gameover();
            }
        }
    }
?>