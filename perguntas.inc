<?php

    $enunciados = array(
            0 => "Enunciado1",
            1 => "Enunciado2",
            2 => "Enunciado3",
            3 => "Enunciado4",
            4 => "Enunciado5"
        );

    $alternativas = array(
        "Enunciado1" => array (
            0 => "Alternativa1",
            1 => "Alternativa2",
            2 => "Alternativa3",
            3 => "Alternativa4"
        ),
        "Enunciado2" => array (
            0 => "Alternativa1",
            1 => "Alternativa2",
            2 => "Alternativa3",
            3 => "Alternativa4"
        ),
        "Enunciado3" => array (
            0 => "Alternativa1",
            1 => "Alternativa2",
            2 => "Alternativa3",
            3 => "Alternativa4"
        ),
        "Enunciado4" => array (
            0 => "Alternativa1",
            1 => "Alternativa2",
            2 => "Alternativa3",
            3 => "Alternativa4"
        ),
        "Enunciado5" => array (
            0 => "Alternativa1",
            1 => "Alternativa2",
            2 => "Alternativa3",
            3 => "Alternativa4"
        ),
    );

    $alternativaCorreta = array (
        0 => 1,
        1 => 1,
        2 => 1,
        3 => 1,
        4 => 1,
    );

    function carregaPergunta($id) {
        $id = $id-1;
        global $enunciados;
        global $alternativas;
        global $alternativaCorreta;
      
        echo "<div class = 'ui medium header'>" . $enunciados[$id] . "</div>";
        echo "<div class='ui form'>";
            echo "<div class='grouped fields'>";
                echo "<label for='alternativa'>Selecione a alternativa correta:</label>";
                
                foreach ($alternativas[$enunciados[$id]] as $alternativa) {
                    echo "<div class='field'>";
                    echo "<div class='ui radio checkbox'>";
                        echo "<input type='radio' name='alternativa' tabindex='0' class='hidden'>";
                        echo "<label>". $alternativa ."</label>";
                    echo "</div>";
                    echo "</div>";
                }
            echo "</div>";
        echo "</div>";
    }
?>  