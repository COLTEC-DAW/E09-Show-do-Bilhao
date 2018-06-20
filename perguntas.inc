<?php
    $perguntas[] = "Quem é o melhor jogador de futebol?";
    $perguntas[] = "Quantos dedos tem o Lula?";
    $perguntas[] = "Qual é a melhor série de livros?";
    $perguntas[] = "Qual é o melhor time de minas?";
    $perguntas[] = "Qual é o melhor apresentador?";

    $certas[] = 3;
    $certas[] = 4;
    $certas[] = 3;
    $certas[] = 1;
    $certas[] = 4;


    $alternativas[0] = array("CR7", "Neymar", "Messi", "Salah");
    $alternativas[1] = array("4", "9", "10", "19");
    $alternativas[2] = array("Percy Jackson e os olimpianos", "As Crônicas de Gelo e Fogo", "Harry Potter", "50 tons de cinza");
    $alternativas[3] = array("Galão da massa", "Framengo", "Ameriquinha", "Marias");
    $alternativas[4] = array("Sílvio Santos", "Gugu", "Tiago Leifert", "Fausto Silva");

    function carrega_perguntas($perguntas, $alternativas){
        $indice = 0;
        foreach($perguntas as $pergunta){                   
            echo "<h3>$pergunta</h3>";
            foreach($alternativas[$indice] as $alternativa){
                echo "<div class=\"form-check\">
                    <input class=\"form-check-input\" id=\"Check$indice\" type=\"radio\" name=\"pergunta$indice\">
                    <label class=\"form-check-label\" for=\"Check$indice\">$alternativa</label>
                </div>";
            }
            $indice++;
        }
    }

    function carrega_pergunta($pergunta, $alternativas, $id){
        $indice = 0;
        $id = intval($id);
        $id++;    
        echo "<h3>" . $pergunta . "</h3>";
        foreach($alternativas as $alternativa){
            $indice++;
            echo "<div class=\"form-check\">
                <input class=\"form-check-input\" value=\"alt$indice\" type=\"radio\" name=\"pergunta$id\">
                <label class=\"form-check-label\">$alternativa</label>
            </div>";
        }
        echo "<input type=\"hidden\" name=\"id\" value=\"$id\"> ";
        echo '<button type="submit" class="btn btn-primary">Próximo</button>';

    }

    function ganhou(){
        include "ganhou.inc";
    }

    function perdeu(){
        include "perdeu.inc";
    }

?>
