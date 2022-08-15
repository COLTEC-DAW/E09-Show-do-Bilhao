<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/styles.css">
    <title>Show do Bilhão</title>
</head>
<body>
    <?php 
        include("./components/header.php");
    ?>

    <div class="content">
        <?php 
                $statements = array(
                    "1) Assinale a alternativa INCORRETA com relação à Literatura Portuguesa:",
                    "2) Com contornos assimétricos, riqueza de detalhes nas vestes e nas feições, a escultura barroca no Brasil tem forte influência do rococó europeu e está representada aqui por um dos profetas do pátio do Santuário do Bom Jesus de Matosinho, em Congonhas (MG), esculpido em pedra-sabão por Aleijadinho. Profundamente religiosa, sua obra revela",
                    "3) O indianismo de nossos poetas românticos é:",
                    "4) As reações negativas do público à Semana de Arte Moderna refletem: ",
                    "5) Macunaíma – obra-prima de Mário de Andrade – é um dos livros que melhor representam a produção literária brasileira do presente século. Sua principal característica é:"
                );
                $alternatives = array(
                    array(
                        "a) O ambiente das cantigas de amor é sempre o palácio, com o trovador declarando seu amor por uma dama (tratada de “senhor”, isto é, senhora). Daí o relacionamento respeitoso, cortês, dentro dos mais puros padrões medievais que caracterizam a vassalagem, a servidão amorosa. ",
                        "b) O teatro vicentino é basicamente caracterizado pela sátira, criticando o comportamento de todas as camadas sociais: a nobreza, o clero e o povo. Gil Vicente não tem preocupação de fixar tipos psicológicos, e sim a de fixar tipos sociais. ",
                        "c) O marco inicial do Romantismo em Portugal é a publicação do poema “Camões”. Todavia, a nova estética literária só viria a se firmar uma década depois com a Questão Coimbrã, quando se aceitou o papel revolucionário da nova poesia e a independência dos novos poetas em relação aos velhos mestres.",
                        "d) Eça de Queirós, em sua obra, dedica-se a montar um vasto painel da sociedade portuguesa, retratada em seus múltiplos aspectos: a cidade provinciana; a influência do clero; a média e a alta burguesia de Lisboa; os intelectuais e a aristocracia. ",
                        "e) A mais rica, densa e intrigante faceta da obra de Fernando Pessoa diz respeito ao fenômeno da heteronímia que deu aos poetas Alberto Caeiro, Ricardo Reis e Álvaro de Campos biografias, características, traços de personalidade e formação cultural diferentes."
                    ),
                    array(
                        "a) liberdade, representando a vida de mineiros à procura da salvação.",
                        "b) credibilidade, atendendo a encomendas dos nobres de Minas Gerais.",
                        "c) simplicidade, demonstrando compromisso com a contemplação do divino.",
                        "d) personalidade, modelando uma imagem sacra com feições populares.",
                        "e) singularidade, esculpindo personalidades do reinado nas obras divinas."
                    ),
                    array(
                        "a)uma forma de apresentar o índio em toda a sua realidade objetiva; o índio como elemento étnico da futura raça brasileira.",
                        "b)um meio de reconstruir o grave perigo que o índio representava durante a instalação da capitania de São Vicente.",
                        "c) um modelo francês seguido no Brasil; uma necessidade de exotismo que em nada difere do modelo europeu.",
                        "d) um meio de eternizar liricamente a aceitação, pelo índio, da nova civilização que se instalava.",
                        "e) uma forma de apresentar o índio como motivo estético; idealização com simpatia e piedade; exaltação da bravura, do heroísmo e de todas as qualidades morais superiores."
                    ),
                    array(
                        "a) a fixação do espírito brasileiro no propósito de menosprezo das criações nacionalistas. ",
                        "b) a possibilidade do futuro fracasso do Modernismo como movimento estético literário. ",
                        "c) a aversão dos autores em se comunicar com o público presente no Teatro Municipal de São Paulo. ",
                        "d) a preferência pelas manifestações artísticas já cristalizadas nas linhas do academicismo. ",
                        "e) o pouco amadurecimento dos autores para propostas de vanguarda."
                    ),
                    array(
                        "a) traçar, como no Romantismo, o perfil do índio brasileiro como protótipo das virtudes nacionais.",
                        "b) Ser um livro em que se encontram representados os princípios que orientam o movimento modernista de 22, dentre os quais o fundamental é a aproximação da literatura à música.",
                        "c) Analisar, de modo sistemático, as inúmeras variações sociais e regionais da língua portuguesa no Brasil, destacando em especial o tupi-guarani.",
                        "d) Ser um texto em que o autor subverter, na linguagem literária os padrões vigentes, ao fazer conviver, sem respeitar limites geográficos, formas linguísticas, oriundas das mais diversas partes do Brasil.",
                        "e) Exaltar, de forma especial, a cultura popular regional, particularmente a representativa do Norte e Nordeste brasileiro."
                    )
                );
                $answers = array(2, 3, 4, 3, 3);

                include("./components/questions.php");

                if($answers[$_POST['question']] == $_POST['alternative']) {
                    if($_POST['question'] == count($statements) - 1){
                        echo "<script> window.location.href = 'win.php' </script>";
                        exit(1);
                    } 

                    loadQuestion($_POST['question'] + 1, $statements, $alternatives);
                    $hits = $_POST['question'] + 1;
                    echo "Acertos: {$hits}/5";
                } else {
                    echo "Opa";
                    echo "<script> window.location.href = 'gameOver.php' </script>";
                }
            ?>
    </div>

    <?php 
        include("./components/footer.php");
    ?>
</body>
</html>