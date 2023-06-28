<?php
class Pergunta{
    public $enunciado;
    public $alternativas;
    public $indiceAlternativaCorreta;
}

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