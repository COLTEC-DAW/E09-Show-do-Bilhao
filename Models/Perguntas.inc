<?php
class Pergunta{
    public $enunciado;
    public $alternativas;
    public $indiceAlternativaCorreta;
}

    $enunciados=array("Qual bicho transmite a Doença de Chagas?", "Qual fruto é no Norte e Nordeste conhecido como jerimum?", "Qual é o coletivo de cães?", "Qual é o triângulo que tem todos os lados diferentes?", "Quem compôs o hino da independência?");
    $alternativas = array(array("abelha", "barata", "pulga", "barbeiro"), array("caju", "abobora", "chuchu", "côco"), array("matilha", "rebanho", "alcateia", "manada"), array("equilátero", "isósceles", "escaleno", "trapézio"), array("Dom Pedro I.", "Manuel Bandeira", "Castro Alves", "Carlos Gomes"));
    $alternativasCorretas = array(3, 1, 0, 2, 0);    

    function carregaPerguntas($id){
        global $enunciados;
        global $alternativas;
        global $alternativasCorretas;

        $pergunta = new Pergunta();
        
        $pergunta->enunciado=$enunciados[$id];
        $pergunta->alternativas=$alternativas[$id];
        $pergunta->indiceAlternativaCorreta=$alternativasCorretas[$id];
        
        return $pergunta;
    }
?>