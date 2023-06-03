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
        echo "<h3>" . $enunciados[$id] . "</h3>";
        
        for($i = 0; $i < 4; $i++) {
            echo "<input type='radio' name='resposta' value='". $i ."'> " . $alternativas[$id][$i] . "<br>";
        }
        echo "<button type='submit'>Enviar</button>";
    }
    function verificaResposta($resposta, $id) {
        global $respostas;

        if(($id<4) AND ($resposta == $respostas[$id])) {
            $next_url = "?id=" . $id+1;
        } else {
            $next_url = "./gameover.php";
        }
        return $next_url;
    }
?>