<?php

function load_question($id) {
    $questions = [
        "Qual a fórmula da água benta?",
        "Quanto é 1+1 em binário?",
        "Qual é o nome do 50cent brasileiro?",
        "Em uma situação em que você e sua dupla têm 10 pontos no truco mineiro, e você possui em sua mão o 'zap' e o 'sete de copas', assinale a jogada incorreta:",
        "Pra fechar com chave de ouro, qual das seguintes linguagens não é de programação:"
    ];
    $options = [
        ["H2O", "HDeusO", "H2O2", "HO"],
        ["2", "10", "11", "Depende do humor do javascript"],
        ["R$ 2,61", "R$ 4.294.967.295", "Vários reais", "R$ 3.4028235E+38"],
        ["Apenas seguir o fluxo do jogo ", "Pedir truco bem alto", "Mostrar a mão completa, você já ganhou mesmo", "Perguntar ao adversário 'Qual que é o nome do jogo?', vai que ele cai"],
        ["Python", "Javascript", "C#", "HTML"]
    ];
    $answers = [1, 1, 0, 1, 3];

    return array(
        "question" => $questions[$id],
        "options" => $options[$id],
        "answer" => $answers[$id]
    );
}

?>
