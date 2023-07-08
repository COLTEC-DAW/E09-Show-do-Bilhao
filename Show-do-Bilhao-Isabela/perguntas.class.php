<?php 

class Questions {
  private $questions;

  public function __construct() {
     $jsonString = file_get_contents('perguntas.json');
     $jsonData = json_decode($jsonString, true);
     
     if (isset($jsonData['perguntas']) && is_array($jsonData['perguntas'])) {
        $this->questions = $jsonData['perguntas'];
     } else {
        $this->questions = [];
     }
  }

  public function loadQuestion($questionId) {
     if (isset($this->questions[$questionId]['pergunta'])) {
        return $this->questions[$questionId]['pergunta'];
     }
     return null;
  }

  public function loadOptions($questionId) {
     if (isset($this->questions[$questionId]['alternativas'])) {
        return $this->questions[$questionId]['alternativas'];
     }
     return null;
  }
  
  public function getCorrectAnswer($questionId) {
     if (isset($this->questions[$questionId]['resposta'])) {
        return $this->questions[$questionId]['resposta'];
     }
     return null;
  }

  public function getTotalQuestions() {
     return count($this->questions);
  }
}




?>

