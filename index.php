<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prova</title>
    <style>
        .page {
            display: none;
        }
    </style>
    <script>
        function showPage(pageNumber) {
            var pages = document.getElementsByClassName("page");
            for (var i = 0; i < pages.length; i++) {
                pages[i].style.display = "none";
            }
            document.getElementById("page" + pageNumber).style.display = "block";
        }
    </script>
</head>
<body>
    <h1>Prova de Conceito</h1>
    <?php
    // Arrays com os dados das perguntas
    $questoes = array(
        "Quais o menor e o maior país do mundo?",
        "Qual o nome do presidente do Brasil que ficou conhecido como Jango?",
        "Qual o maior e melhor time de futebol de MG?",
        "Quanto é 18.526 + 89?",
        "Qual o livro mais vendido no mundo depois da Bíblia?",
    );

    $alternativas = array(
        array("Nauru e China", "Mônaco e Canadá", "Vaticano e Rússia", "Malta e Estados Unidos"),
        array("João Goulart", "João Figueiredo", "Getúlio Vargas", "Jacinto Anjos"),
        array("Cruzeiro", "Cabuloso", "Zeiro", "Palestra Itália"),
        array("18.615", "17.615", "18.515", "17.515"),
        array("O Senhor dos Anéis", "Dom Quixote", "O Pequeno Príncipe", "Ela, a Feiticeira"),
    );

    $alternativaCorreta = array(2, 0, 0, 0, 1); // Índice da alternativa correta para cada pergunta

    // Loop para carregar e exibir as perguntas em páginas separadas
    for ($i = 0; $i < count($questoes); $i++) {
        echo '<div class="page" id="page' . ($i + 1) . '">';
        echo "<h3>Pergunta " . ($i + 1) . ":</h3>";
        echo "<p>" . $questoes[$i] . "</p>";
        echo "<ul>";
        for ($j = 0; $j < count($alternativas[$i]); $j++) {
            echo "<li>" . $alternativas[$i][$j] . "</li>";
        }
        echo "</ul>";
        echo "<p>Alternativa correta: " . $alternativas[$i][$alternativaCorreta[$i]] . "</p>";
        echo "<hr>";
        if ($i < count($questoes) - 1) {
            echo '<button onclick="showPage(' . ($i + 2) . ')">Próxima pergunta</button>';
        }
        echo '</div>';
    }
    ?>
    <script>
        showPage(1);
     </script>
</body>
</html>