<?php 

    require "questoes.json";

    class Questao
    {
        var $perguntas = array(
            "Quem é o melhor jogador de futebol do mundo atualmente?",
            "Quantas bolas de ouro do prêmio de melhor do mundo tem Cristiano Ronaldo?",
            "Em qual país foi realizada as Olimpiedas de 2016?",
            "Qual é o melhor time de futebol do estado de Minas Gerais?",
            "Qual é o jogador de futebol com mais gols marcados em jogos oficiais?"
        );
        var $alternativas = array(
            array("Cristiano Ronaldo", "Lionel Messi", "Neymar Júnior", "Kylian Mbappé"),
            array("2", "3", "6", "5"), array("Suíça", "Inglaterra", "França", "Brasil"),
            array("Atlético Mineiro", "América", "Cruzeiro", "Vila Nova"),
            array("Cristiano Ronaldo", "Lionel Messi", "Pelé", "Josef Bican")
        );
        var $gabarito = array("1", "3", "3", "2", "0");

        function __construct(){
            $this->pergunta = $enunciado;
            $this->alternativa = $alternativas;
            $this->respostas = $resposta;
        }
        public function getQuestion($id)
        {
            return ($this->perguntas[$id],$this->alternativas[$id]);
        }
    }
?>
