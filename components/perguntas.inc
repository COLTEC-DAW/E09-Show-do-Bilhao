<?php

    $enunciados = array(
            0 => "De quem é a famosa frase “Penso, logo existo“",
            1 => "De onde é a invenção do chuveiro elétrico?",
            2 => "Qual o grupo em que todas as palavras foram escritas corretamente?",
            3 => "Atualmente, quantos elementos químicos a tabela periódica possui?",
            4 => "O que a palavra legend significa em português?"
        );

    $alternativas = array(
        0 => array (
            0 => "Platão",
            1 => "Galileu Galilei",
            2 => "Descartes",
            3 => "Sócrates"
        ),
        1 => array (
            0 => "França",
            1 => "Inglaterra",
            2 => "Austrália",
            3 => "Brasil"
        ),
        2 => array (
            0 => "Asterístico, beneficiente, meteorologia, entertido",
            1 => "Asterisco, beneficente, meteorologia, entretido",
            2 => "Asterisco, beneficente, metereologia, entretido",
            3 => "Asterisco, beneficiente, metereologia, entretido"
        ),
        3 => array (
            0 => "92",
            1 => "108",
            2 => "109",
            3 => "118"
        ),
        4 => array (
            0 => "Legenda",
            1 => "História",
            2 => "Lenda",
            3 => "Legendário"
        ),
    );

    $alternativaCorreta = array (
        0 => 2,
        1 => 3,
        2 => 1,
        3 => 3,
        4 => 2,
    );

    function carregaPergunta($id) {
        global $enunciados;
        global $alternativas;
      
        echo "<div class = 'ui medium header'>" . $enunciados[$id] . "</div>";
        echo "<form action='perguntas.php' method='POST'>";
            echo "<div class='ui form'>"; 
                echo "<div class='grouped fields'>";
                    echo "<label>Selecione a alternativa correta:</label>";
                    
                    foreach ($alternativas[$id] as $alternativa) {
                        echo "<div class='field'>";
                        echo "<div class='ui radio checkbox'>";
                            echo "<input type='radio' name='alternativa' value='".$alternativa."' tabindex='0' class='hidden'>";
                            echo "<label>". $alternativa ."</label>";
                        echo "</div>";
                        echo "</div>";
                    }
                echo "</div>";
                
                echo "<input type='hidden' name='id' value='" . ($id+1) ."'>";
		        echo "<button class='ui button' type='submit'>Próximo</button>";
            echo "</div>";
        echo "</form>";
    }

    function checandoResposta($id, $resp) {
        global $alternativaCorreta;
        global $alternativas;
        if($alternativas[$id-1][$alternativaCorreta[$id-1]] == $resp) {
            return true;
        } else {
            return false;
        }
    }    
?>  