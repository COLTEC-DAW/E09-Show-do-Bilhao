<?php 

class Questions
{

    private $questions = [
        "As árvores que não perdem suas folhas no outono, são também chamadas de:",
        "Qual desses ingredientes não é usado no preparo do pavê?",
        "O que é um Cartoon",
        "Quem nasce no Estado do Rio de Janeiro é:"
    ];
    private  $options = [
        ["Viçosas","Floridas","Sempre-Verdes","Nativas"],
        ["Bolacha", "Manteiga", "Gemas", "Pimenta"],
        ["Desenho Animado", "Livro Antigo", "Livro de Receitas", "Carta Geográfica"],
        ["Fluminense", "Paulistano", "Sergipano", "Gaúcho"]
    ];

    private  $answers = [2, 3, 0, 0];
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

