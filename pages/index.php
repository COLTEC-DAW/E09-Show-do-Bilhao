<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

    <link href="../css/index.css" rel="stylesheet">

</head>
<body>
    <?php require "../templates/menu.inc.php"?>

    <div class="container">
        <div class="row">
            <div class="content mt-15" >
                <p>O Show do Bilhão é um programa idealizado pela emissora SBT (Sistema Brasileiro de Televisão). Neste programa, um candidato escolhido da audiência é submetido a uma sequência de 5 perguntas de conhecimento geral. A medida em que o candidato responde cada pergunta ele avança no jogo.

                O jogo termina quando o candidato responde uma pergunta incorretamente. Após o término do jogo o sistema calcula a pontuação final do candidato. Sua pontuação é dada pela quantidade de perguntas respondidas corretamente pelo candidato.</p>

                <div class="mt-5">
                    <form action="../pages/login.php" method="GET">
                        <input type="submit" value="Jogar">
                        <input type="hidden" name="id" value="0">
                        
                    </form>
                </div>
            </div>
        </div>
    </div>
    
    <?php require "../templates/rodape.inc.php"?>
</body>
</html>

