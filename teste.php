<?php
$perguntas[] = ["Primeira pergunta", "Segunda Pergunta", "Terceira Pergunta", "Quarta Pergunta", "Quinta Pergunta"];
$certas[] = [1, 1, 3, 2, 0];

$alternativas[0] = ["Alternativa 1", "Alternativa 2", "Alternativa 3", "Alternativa 4"];
$alternativas[1] = ["Alternativa 1", "Alternativa 2", "Alternativa 3", "Alternativa 4"];
$alternativas[2] = ["Alternativa 1", "Alternativa 2", "Alternativa 3", "Alternativa 4"];
$alternativas[3] = ["Alternativa 1", "Alternativa 2", "Alternativa 3", "Alternativa 4"];
$alternativas[4] = ["Alternativa 1", "Alternativa 2", "Alternativa 3", "Alternativa 4"];

foreach($perguntas as $pergunta){
    echo '<div class="pergunta">                    
    <h3>$pergunta</h3>'
    $indice = 0;
    foreach($alternativas as $alternativa){
        $indice++;
        echo '
        <div class="form-check">
            <input class="form-check-input" id="Check$indice" type="radio" name="pergunta$indice">
            <label class="form-check-label" for="Check$indice">$alternativa</label>
        </div>
    '
    }
}
    <div class="form-check">
        <input class="form-check-input" id="Check1" type="radio" name="pergunta1">
        <label class="form-check-label" for="Check1">Alternativa 1</label>
    </div>
    
    <div class="form-check">
        <input class="form-check-input" id="Check2" type="radio" name="pergunta1">
        <label class="form-check-label" for="Check2">Alternativa 2</label>
    </div>
        
    <div class="form-check">
        <input class="form-check-input" id="Check3" type="radio" name="pergunta1">
        <label class="form-check-label" for="Check3">Alternativa 3</label>
    </div>
        
    <div class="form-check">
        <input class="form-check-input" id="Check4" type="radio" name="pergunta1">
        <label class="form-check-label" for="Check4">Alternativa 4</label>
    </div>
        
    <div class="form-check">
        <input class="form-check-input" id="Check5" type="radio" name="pergunta1">
        <label class="form-check-label" for="Check5">Alternativa 5</label>
    </div> -->
</div> '

}