<?php
class Pergunta{
    public $enunciado;
    public $alternativas;
    public $indiceAlternativaCorreta;
}

    /*$enunciados=array("Qual bicho transmite a Doença de Chagas?", "Qual fruto é no Norte e Nordeste conhecido como jerimum?", "Qual é o coletivo de cães?", "Qual é o triângulo que tem todos os lados diferentes?", "Quem compôs o hino da independência?");
    $alternativas = array(array("abelha", "barata", "pulga", "barbeiro"), array("caju", "abobora", "chuchu", "côco"), array("matilha", "rebanho", "alcateia", "manada"), array("equilátero", "isósceles", "escaleno", "trapézio"), array("Dom Pedro I.", "Manuel Bandeira", "Castro Alves", "Carlos Gomes"));
    $alternativasCorretas = array(3, 1, 0, 2, 0);    
    $perguntas;**/

    $nomeArquivo = $_SERVER['DOCUMENT_ROOT'] . '/Data/perguntas.json';
    $perguntasJson = file_get_contents($nomeArquivo);
    $perguntas = json_decode($perguntasJson, true);

    function carregaPerguntas($id, $perguntas){

        $pergunta = new Pergunta();
        
        $pergunta->enunciado=$perguntas[$id]['enunciado'];
        $pergunta->alternativas=$perguntas[$id]['alternativas'];
        $pergunta->indiceAlternativaCorreta=$perguntas[$id]['resposta'];
        
        return $pergunta;
    }
?>