<!DOCTYPE html>
<html lang="en">
<head>
    <meta encoding="utf-8">
    <meta name="desenvolvedor" content="Laiza Ferreira">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Show Do Bilhão</title>
    <link rel="stylesheet" href="./detalhes.sass" />
    <link rel="stylesheet" href="./arquivo.sass" />
    <link rel="stylesheet" href="./respostas.php" />
</head>
<body class="body" name="pageInitial">
    <section class="cabecalho">
        <h1 class="col_12" id="titulo"> O show do Bilhão </h1>
        <p class="col_12" id="subtitulo"> </p> 
    </section>  
    <div class="container">
        <section>
            <form class="form" action="perguntas.php" method="get">
                Primeira pergunta: <input type="checkbox" name="id" value="0"> <br>
                Segunda pergunta: <input type="checkbox" name="id" value="1"> <br>
                Terceira pergunta: <input type="checkbox" name="id" value="2"> <br>
                <input type="submit" name="Enviar"><br>
            </form>
        </section>
    </div>
    <footer class="col_12" id="footer">
        <p> Desenvolvimento de Aplicações Web - COLTEC/UFMG </p>
        <p> Laiza Ferreira Lage </p>
    </footer>
</body>
</html>
