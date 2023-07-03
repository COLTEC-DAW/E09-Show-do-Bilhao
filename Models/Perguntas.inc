<?php
class Pergunta{
    public $id;
    public $enunciado;
    public $alternativas;
    public $indiceAlternativaCorreta;
   public function carregaPerguntas($id, $perguntas){
        $this->id=$id;
        $this->enunciado=$perguntas[$id]['enunciado'];
        $this->alternativas=$perguntas[$id]['alternativas'];
        $this->indiceAlternativaCorreta=$perguntas[$id]['resposta'];

    }
}

    $nomeArquivo = $_SERVER['DOCUMENT_ROOT'] . '/Data/perguntas.json';
    $perguntasJson = file_get_contents($nomeArquivo);
    $perguntas = json_decode($perguntasJson, true);

?>