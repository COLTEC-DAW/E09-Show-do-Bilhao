<?php 

    function pergunta($num_pergunta){

            $perguntas = [

                "De onde é a invenção do chuveiro elétrico?",
                "Em que cidade ocorreu a Eco-92, a Conferência das Nações Unidas sobre ambiente e desenvolvimento?",
                "Única capital europeia fora da Europa",
                "Qual o livro mais vendido no mundo a seguir à Bíblia?",
                "Qual foi o menor período que alguém ocupou a cadeira de presidente"
                    
            ];

            $alternativas = [

                ["França","Inglaterra","Brasil","Austrália"],
                ["Amsterdã", "Rio de Janeiro", "Montevidéu", "Frankfurt"],
                ["Otawa", "Hong Kong", "Istambul", "Rio de Janeiro"],
                ["O Senhor dos Anéis", "Dom Quixote", "Harry Potter", "O Pequeno Príncipe"],
                ["3 dias", "1 mês", "7 horas", "2 semanas"]

            ];

            $respostas = [2,1,3,1,0];
                
            echo "<h2>{$perguntas[$num_pergunta]}</h2>";
            echo "<ol type='a'>";

            for($pos_alternativas = 0; $pos_alternativas < count($alternativas[$num_pergunta]); $pos_alternativas++){
                    
                echo "<li>{$alternativas[$num_pergunta][$pos_alternativas]} </li>";

            }

        echo "</ol>";
    }
?>