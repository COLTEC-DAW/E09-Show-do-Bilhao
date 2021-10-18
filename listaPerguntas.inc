<?php
    class Pergunta {
        private $enunciado = "Sem enunciado de pergunta";
        private $opcoes = array("Opcao1","Oppcao2","Opcao3","Opcao4");
        private $correto = 0;

        function __construct($enunciado, $Op1, $Op2, $Op3, $Op4, $indiceCorreto) {
            $this->enunciado = $enunciado;
            $this->opcoes = array($Op1, $Op2, $Op3, $Op4);
            $this->correto = $indiceCorreto;
        }

        public function printSelf() {
            echo "$this->enunciado <br>
            1. " . $this->opcoes[0] . "<br>
            2. " . $this->opcoes[1] . "<br>
            3. " . $this->opcoes[2] . "<br>
            4. " . $this->opcoes[3] . "<br>";
        }
    }

    
    $listaPerguntas = array(
        new Pergunta("Qual país team a maior quantidade de maquinas de vendas por capta?",
        "Estados Unidos", "Japão", "Nova Zelândia", "Noruega", 1),
        new Pergunta("Qual foi o programa de TV mais duradouro?",
        "Domingão do Faustão", "The Morning Show", "Oshareism", "Sabado Gigante", 3),
        new Pergunta("Qual o país que esteve em paz por maior tempo?",
        "Suécia", "Suíça", "Croacia", "Suriname", 0),
        new Pergunta("Que escritor brasileiro escreveu \"A Negrinha?\"",
        "Figueiredo Pimentel", "Monteiro Lobato", "Aluísio Azevedo", "Lima Barreto", 1));
?>