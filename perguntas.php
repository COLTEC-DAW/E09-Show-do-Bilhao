<?php
$perguntas = array(
    "Qual economista do século XIX desenvolveu a teoria das vantagens comparativas e argumentou que o trabalho era a fonte fundamental de valor na economia?",
    "Qual é a caracteristica da democracia defendida por Montesquieu?",
    "Qual das características não estão presentes na sociedade de 'A Utopia' de Thomas More?",
    "Qual dos conceitos não foi desenvolvido por Karl Marx?",
    "pergunta5",
    "pergunta6"
);
$alternativas = array(
    array(
        "a) David Ricardo.......",
        "b) John Maynard Keynes",
        "c) Karl Marx...........",
        "d) Adam Smith.........."
    ),
    array(
        "a) ao status de cidadania que o indivíduo adquire ao tomar as decisões por si mesmo. ",
        "b) à possibilidade de o cidadão participar no poder e, nesse caso, livre da submissão às leis. ",
        "c) ao direito do cidadão exercer sua vontade de acordo com seus valores pessoais",
        "d) ao condicionamento da liberdade dos cidadãos à conformidade às leis. "
    ),
    array(
        "a) Igualdade Social e econômica",
        "b) Participação política. . . . . . . . .",
        "c) Direito a propriedade privada",
        "d) Liberdade religiosa. . . . . . . . . ."
    ),
    array(
        "a) Luta de classes. . . . . . . ",
        "b) Mais valia. . . . . . . . . .",
        "c) Fetichismo da mercadoria. . .",
        "d) Teoria da vantagem comparativa"
    ),
    array(
        "a",
        "b",
        "c",
        "d"
    ),
    array(
        "a",
        "b",
        "c",
        "d"
    )
);
$respostas = array(0, 3, 2, 3, 1, 2);

function carregarPergunta($num){
    global $perguntas;
    global $alternativas;
    global $respostas;
    $vector[0] = $perguntas[$num];
    $vector[1] = $alternativas[$num];
    $vector[2] = $respostas[$num];

    return $vector;
}
?>