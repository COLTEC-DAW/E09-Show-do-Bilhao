<?php 

class Questions
{

    private $questions = [
        "Leonardo DiCaprio ganhou o Oscar por qual de seus filmes?",
        "Quando é o outono do hemisfério norte?",
        "Qual é a cor das famosas cabines telefônicas de Londres?",
        "Nos contos de fadas, qual animal que, quando é beijado, vira um príncipe?"
    ];
    private  $options = [
        ["Titanic","O Lobo de Wall Street","O Grande Gatsby","O Regresso"],
        ["De janeiro a abril", "De abril a julho", "De julho a setembro", "De setembro a dezembro"],
        ["Verde", "Vermelho", "Azul", "Amarelo"],
        ["Cavalo", "Rato", "Sapo", "Sua mãe"]
    ];

    private  $answers = [3, 3, 1, 2];
    public function load_question($id){
        return $this->questions[$id];
    }
    public function load_option($id){
        return $this->options[$id];
    }
    public function load_answer($id){
        return $this->answers[$id];
    }
}
?>
