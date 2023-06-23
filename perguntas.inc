<?php

 //construindo as questões com posições fixas 
function carregaPergunta($id) {
    $perguntas = array(
        1 => new questions("qual o tamanho do meu pau?", "A 15 cm", "B 22 cm", "C 5 cm", "D 6 cm", "a"),
        2 => new questions("qual o nome do presidente do Brasil?", "Fernando Henrique Cardoso","Lula","Michal Temer","Bolsomito 2022","b"),
        3 => new questions("qual o objeto que se bebe café?", "garrafa vodka", "copo", "xicara", "nas mãos", "c"),
        4 => new questions("qual é uma dupla sertaneja", "Ze neto e Cristiano", "Jose Beto e Luciano", "Heberto e Cristiano", "Mercelo e Juliano", "a"),
        5 => new questions("qual o objeto que se bebe café?", "garrafa vodka", "bbb", "ccc", "ddd", "a")
    );

    return $perguntas[$id] ?? null;
}
?>
