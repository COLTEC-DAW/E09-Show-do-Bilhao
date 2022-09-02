<?php

class Questions
{

    private $questions = [
        "Qual a fórmula da água benta?",
        "Quanto é 1+1 em binário?",
        "Qual é o nome do 50cent brasileiro?",
        "Em uma situação em que você e sua dupla têm 10 pontos no truco mineiro, e você possui em sua mão o 'zap' e o 'sete de copas', assinale a jogada incorreta:",
        "Pra fechar com chave de ouro, qual das seguintes linguagens não é de programação:"
    ];

    private  $options = [
        ["H2O", "HDeusO", "H2O2", "HO"],
        ["2", "10", "11", "Depende do humor do javascript"],
        ["R$ 2,61", "R$ 4.294.967.295", "Vários reais", "R$ 3.4028235E+38"],
        ["Apenas seguir o fluxo do jogo ", "Pedir truco bem alto", "Mostrar a mão completa, você já ganhou mesmo", "Perguntar ao adversário 'Qual que é o nome do jogo?', vai que ele cai"],
        ["Python", "Javascript", "C#", "HTML"]
    ];
    private  $answers = [1, 1, 0, 1, 3];

    // public function load_question($id)
    // {

    //     return array(
    //         "question" => $this->questions[$id],
    //         "options" => $this->options[$id],
    //         "answer" => $this->answers[$id]
    //     );
    // }
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
