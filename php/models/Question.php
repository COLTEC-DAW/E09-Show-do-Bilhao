<?php

class Question {
  private $enunciado;
  private $alternativas;
  private $alternativaCorreta;

  public function __construct($enunciado, $alternativas, $alternativaCorreta) {
    $this->enunciado = $enunciado;
    $this->alternativas = $alternativas;
    $this->alternativaCorreta = $alternativaCorreta;
  }

  public function getEnunciado() {
    return $this->enunciado;
  }

  public function getAlternativas() {
    return $this->alternativas;
  }

  public function getAlternativaById($id) {
    return $this->alternativas[$id];
  }

  public function getAlternativaCorreta() {
    return $this->alternativaCorreta;
  }

  public static function carregaPergunta($id) {
    $json = json_decode(file_get_contents('../files/questions.json'), true); ;
    return new Question($json[$id]["enunciado"], 
                        $json[$id]["alternativas"], 
                        $json[$id]["alternativaCorreta"]);
  }

  public static function checandoResposta($id, $resp, $question) {
    if($resp == $question->getAlternativaById($question->getAlternativaCorreta())) {
      if ($id == 5) {
          $redirect = "winner.php";
          Question::timeAndScore($id);
          header("location:$redirect");
      }
    } else {
      $redirect = "error.php";
      Question::timeAndScore($id);
      header("location:$redirect");  
    }   
  }    

  public static function timeAndScore($score){
    date_default_timezone_set('America/Sao_Paulo');
    $date = date('d/m/Y h:i:s a', time());
    setcookie("score", $score, time() + (86400 * 30), "/"); // 86400 = 1 day  
    setcookie("time", $date, time() + (86400 * 30), "/");       
  }
}

?>