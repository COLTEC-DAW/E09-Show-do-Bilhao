 <?php 
    // array com os enunciados
    $enunciados = array(
        "<p>Em qual língua o Death Note está escrito?</p>",
        "<p>Qual o nome verdadeiro de Kira?</p>",
        "<p>Onde Light Yagami estava quando viu o Death Note pela primeira vez?</p>",
        "<p>Quem L escolheu como seu Sucessor?</p>",
        "<p>Qual o nome do Shinigami que entregou o caderno a Misa Amane?</p>",
    );
    
    // matriz com as alternativas
    $alternativas = array(
        array("Inglês","Português","Japonês","Espanhol"),
        array("Mikami","Light Yagami","Matsuda","Soichiro Yagami"),
        array("Em sua Casa","Numa Loja de Conveniência","Na Escola","Numa Cafeteria"),
        array("Near","Mello","Watari","Ele Não Se Decidiu"),
        array("Gelus","Rem","Ryuk","Sidoh"),
        
    );

    $respostas = array(0,1,2,3,1);
    
    $keys = array_keys($alternativas);

    function letraResposta($indice){
        $letra = array("A","B","C","D");
        return $letra[$indice];
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ANIME QUIZ</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <div class="row">
            <h2 class="col">Perguntas : </h2>
            <div class="container">
                <ol>
                    <?php
                        foreach ($enunciados as $chave => $enunciado) {
                            echo "<li>";
                                echo "<strong>{$enunciado}</strong>";
                                echo "<ol type = 'A'>";
                                    foreach ($alternativas[$keys[$chave]] as $alternativa) {
                                        echo "<li>$alternativa</li>";
                                    }
                                echo "</ol>";
                            echo "</li>";
                        }
                    ?>
                </ol>
            </div>
        </div>
        <div class="row col-3">
            <h2>Gabarito: </h2>
            <table class="table table-bordered border-dark">
                <thead>
                    <tr>
                        <th>Questao</th>
                        <th>Resposta</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                        foreach ($respostas as $chave => $indiceResposta) {
                            echo "<tr>";
                                $numeroPergunta = $chave + 1;
                                echo "<td>{$numeroPergunta}</td>";

                                $letra = letraResposta($indiceResposta);
                                echo "<td>$letra</td>";
                            echo "</tr>";
                        }
                    ?>
                </tbody>
            </table>
        </div> 
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>