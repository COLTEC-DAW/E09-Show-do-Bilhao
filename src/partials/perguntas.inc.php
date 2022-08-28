<?php
// function carregaPergunta($id, $enunciados, $alternativas){
//     echo "<form action='perguntas.php' method='post'>";
//     echo "<h2> {$enunciados[$id]} </h2>";
//     echo "<input type='hidden' value='{$id}' name='pergunta'>";    
//     for($j = 0; $j < count($alternativas[$id]); $j++){
//         echo "<div><input type='radio' id='{$j}' name='alternativa' value='{$j}'><label for='{$j}'>{$alternativas[$id][$j]}</label></div>";
//     }
//     echo "<br>";
//     echo "<button type='submit'>Enviar</button>";
//     echo "</form>";
// }

    function carregaPergunta($id, $nome_arquivo){
        
        $arquivo = json_decode(file_get_contents($nome_arquivo));
        return array(
            "enunciado" => $arquivo[$id]->enunciado,
            "alternativas" => $arquivo[$id]->alternativas,
            "resposta" => $arquivo[$id]->resposta,
            "resposta_anterior" => $arquivo[$id == 0 ? 0 : $id - 1]->resposta
        );
    }

?>