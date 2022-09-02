<?php 

class Questions
{
    private $questions = [
        "Quantos Grammy's tem a banda paramore?",
        "Quantos Grammy's tem a multipremiada e conceituada artista Melanie Martinez?",
        "Cabelo loiro é sinômimo do que na cultura popular?",
        "Olhos verdes indicam possíveis problemas:",
        "Qual a principal cidade do subúrbio subdesenvolvido de Belo Horizonte?"
    ];
    // vetor com as questões

    private  $options = [
        ["0", "1", "10", "Não foram indicados"],
        ["10", "0", "13", "Além de seus vários Grammy's, Melanie Martinez também possui em sua estante um Oscar, um Tonny e um Emmy, classificando-a como uma artista que possui um EGOT"],
        ["Inteligência", "Bom gosto", "Felicidade", "Burrice"],
        ["Mentais", "Oftalmológicos", "Cognitivos", "Dermatológicos"],
        ["Gotham City", "Raposos", "Contagem", "Venda Nova"]
    ];
    // vetor com as alternativas

    private  $answers = [3, 3, 3, 1, 2];
    //vetor com as respostas 

    public function load_question($id){
        return $this->questions[$id];
    }
    public function load_option($id){
        return $this->options[$id];
    }
    public function load_answer($id){
        return $this->answers[$id];
    }
    // carregam as questões, alternativas e respostas de acordo com a página
}

?>

