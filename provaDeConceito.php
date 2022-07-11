<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Prova de Conceito - Show do Bilhão</title>
    </head>
    <body>
    <?php 

        // opa, joao! tranquilo?
        // sei que não é exaaaatamente o q vc pediu,
        // mas achei mais eficiente salvar a pergunta 
        // como chave do array e o array de respostas
        // como valor.  
        // Qualquer coisa, posso refazer, mas acredito
        // que atende à proposta da atividade.

        $questions = [
            "Droga, é a:" => [
                "Insituição Ulisses Drummond",
                "Loud",
                "Lele",
                "Noia"
            ],

            "Bandex?" => [
                "É o catabolizas",
                "Sim.",
                "Vitão0808",
                "Carne na engenharia e pratão no bandex",
                "Janta no bandex?"
            ],

            "ICP significa:" => [
                "Instituto de Ciências Políticas",
                "Instituto de Criadores de Ponteiros",
                "Instituto de Criadores de Pessoas",
                "Instituto Catarina Parreiras",
                "International Center of Problems"
            ],

            "A call é:" => [
                "Comer frutos",
                "Marmitar caloura",
                "Pod e alcool",
                "Catabolizar e tomar anabolizantes para anabolizar o que você catabolizou"
            ],

            "Complete a frase corretamente: Só o _____ " => [
                "Necessário",
                "Essencial",
                "Básico",
                "Fundamental"
            ],
        ];

        $correctAnswers =  [1,0,3,3,2];

        foreach ($questions as $question => $answers) {
            echo "<h2>$question</h2>";
            echo "<ol type='a'>";
            foreach ($answers as $answer) {
                echo "<li> $answer</li>";
            }
            echo "</ol>";
        }
    ?>
    </body> 
</html>